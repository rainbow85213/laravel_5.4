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
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File\File_info;


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

        $_req->session()->flash('alert-info' , " 현재 글이 등록되었습니다.");
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

            $_req->session()->flash('alert-info' , " 현재 글이 수정되었습니다.");
            return redirect( route('admin::bbs::notice::index') );
        } else {
            // 작성자만 글을 수정 가능하다.
            $_req->session()->flash('alert-danger', " 본인 글만 수정 가능합니다.");
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

            $fileInfo = new File_info();

            $filePath = $fileInfo->fileSave($_req->allFiles());

            if($filePath['resultCode']) {
                $http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';
                $returnPath = $http . $_SERVER['HTTP_HOST'] . "/" . str_replace('public' , 'storage' , $filePath['resultData']);

                echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction({$_req->input('CKEditorFuncNum')}, '$returnPath');</script>;";
            } else {
                echo "<script type='text/javascript'>alert('파일 업로드에 문제가 발생되었습니다.');</script>;";
            }

        }else{
            exit;

        }
    }


    /*
        $fileInfo = new File_info();

        $filePath = $fileInfo->fileInfo($_req->file('upload_file'));

//      echo $http . $_SERVER['HTTP_HOST'] . "/" . str_replace('public' , 'storage' , $filePath);
        dd($filePath);
     */
}