<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 15.
 * Time: PM 4:42
 */

namespace App\Http\Controllers\Admin\Bbs\Notice;

use App\Models\Tool\Common_Cds\Common_Cds;
use Auth;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Bbs\Notice\Bbs_notice;
use Illuminate\Http\Request;


class BbsNoticeController extends Controller
{
    public $side = "notice";

    /**
     * 게시판 - 공지사항
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function index(Request $_req) {
        // 작성자 아이디
        $userId = Auth::user()->id;

        // 게시판 공지사항 리스트
        $bbsNotice = new Bbs_notice();

        $bbsNoticeArr = $bbsNotice
                            ->join('common_cds', function ($join) {
                                $join->on('bbs_notice.bbs_notice_sort', '=', 'common_cds.det_cd')
                                    ->where('common_cds.main_cd', '=', 'A0001');
                            })
                            ->select(DB::raw('bbs_notice.* , common_cds.name AS bbs_notice_type_name'))
                            ->with([ 'user' ]);

        if(trim($_req->input('noticeSearchText')) != "") {
            $bbsNoticeArr = $bbsNoticeArr->where('bbs_notice_title' , 'like', "%" . $_req->input('noticeSearchText') . "%");
        }

        $bbsNoticeArr = $bbsNoticeArr
                            ->whereBbs_notice_use_yn('Y')
                            ->orderBy('bbs_notice_sort' , 'DESC')
                            ->paginate(15);

        return view('admin.bbs.notice.index')
                ->with('side' , $this->side)
                ->with('userId' , $userId)
                ->with('bbsNoticeArr' , $bbsNoticeArr);
    }

    /**
     * 게시판 - 공지사항
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function create() {
        // 작성자 아이디
        $userId = Auth::user()->id;

        // 공통코드에 있는 구분자 가져오기
        $commonCds = new Common_Cds();
        $bbsNoticeTypeArr = $commonCds->whereMain_cd('A0001')->whereUse_yn('Y')->orderBy('det_cd' , 'ASC')->get();

        return view('admin.bbs.notice.create')
                ->with('side' , $this->side)
                ->with('userId' , $userId)
                ->with('bbsNoticeTypeArr' , $bbsNoticeTypeArr);
    }

    /**
     * 게시판 - 공지사항
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function save(Request $_req) {
        $bbsNotice = new Bbs_notice();

        $bbsNotice->bbs_notice_sort = $bbsNotice->get_bbs_notice_sort_num();
        $bbsNotice->bbs_notice_type = $_req->bbsNoticeType;
        $bbsNotice->bbs_notice_writer_id = $_req->bbsNoticeWriterId;
        $bbsNotice->bbs_notice_title = $_req->bbsNoticeTitle;
        $bbsNotice->bbs_notice_content = $_req->bbsNoticeContent;
        $bbsNotice->bbs_notice_use_yn = 'Y';
        $bbsNotice->save();

        return redirect( route('admin::bbs::notice::index') );
    }

    /**
     * 게시판 - 공지사항
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function show($bbs_notice_id) {
        // 작성자 아이디
        $userId = Auth::user()->id;

        // 공지글 자세히 보기
        $bbsNotice = new Bbs_notice();

        $bbsNoticeArr = $bbsNotice
                            ->leftJoin('common_cds', function ($join) {
                                $join->on('bbs_notice.bbs_notice_sort', '=', 'common_cds.det_cd')
                                    ->where('common_cds.main_cd', '=', 'A0001');
                            })
                            ->select(DB::raw('bbs_notice.* , common_cds.name AS bbs_notice_type_name'))
                            ->with([ 'user' ])
                            ->whereBbs_notice_use_yn('Y')
                            ->where('bbs_notice.id' , '=' , $bbs_notice_id)
                            ->first();

        return view('admin.bbs.notice.show')
                ->with('side' , $this->side)
                ->with('userId' , $userId)
                ->with('bbsNoticeArr' , $bbsNoticeArr);
    }

    /**
     * 게시판 - 공지사항
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function update(Request $_req) {
        // 작성자 아이디
        $userId = Auth::user()->id;

        $bbsNotice = new Bbs_notice();

        if($bbsNotice->auth_bbs_notice_write_chk($_req->input('bbsNoticeId') , $userId)) {

            $bbsNoticeArr = $bbsNotice->whereId($_req->input('bbsNoticeId'))->first();

            $bbsNoticeArr->bbs_notice_title = $_req->input('bbsNoticeTitle');
            $bbsNoticeArr->bbs_notice_content = $_req->input('bbsNoticeContent');

            $bbsNoticeArr->update();

            $_req->session()->flash('alert-warning' , "[알림!] 현재 글이 수정되었습니다.");
            return redirect( route('admin::bbs::notice::index') );
        } else {
            // 작성자만 글을 수정 가능하다.
            $_req->session()->flash('alert-danger', "[알림!] 본인 글만 수정 가능합니다.");
            return back()->withInput();
        }

    }




    /**
     * 게시판 - 에디터 이미지 업로드
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function img_upload(Request $_req) {

        if ($_req->file('upload')->getSize() > 0 ){

            // 현재시간 추출
            $date_filedir    = date("YmdHis");

            //오리지널 파일 이름.확장자
            $ext = substr(strrchr($_req->file('upload')->getClientOriginalName(),"."),1);
            $ext = strtolower($ext);
            $savefilename = $date_filedir."_".str_replace(" ", "_", $_req->file('upload')->getClientOriginalName());

            $uploadpath  = $_SERVER['DOCUMENT_ROOT']."/upload/images";
            $uploadsrc = $_SERVER['HTTP_HOST']."/upload/images/";
            $http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';

            //php 파일업로드하는 부분
            if($ext=="jpg" or $ext=="gif" or $ext =="png"){
                //if(move_uploaded_file($_req->file('upload')->getFilename(),$uploadpath."/".iconv("UTF-8","EUC-KR",$savefilename))){
                if(move_uploaded_file($_req->file('upload')->getPathname(),$uploadpath."/".$savefilename)){
                    $uploadfile = $savefilename;
                    echo "<script type='text/javascript'>alert('업로드성공: ".$savefilename."');</script>;";
                } else {
                    dd();
                }

            }else{
                echo "<script type='text/javascript'>alert('jpg,gif,png파일만 업로드가능합니다.');</script>;";
            }

        }else{
            exit;

        }

        echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction({$_req->input('CKEditorFuncNum')}, '" . $http . $uploadsrc . "$uploadfile');</script>;";
    }
}