<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 9.
 * Time: PM 3:01
 */

namespace App\Http\Controllers\Admin\Tool\Common_Cds;

use Auth;
use DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Tool\Common_Cds\Common_Cds;
use Illuminate\Http\Request;


class CommonCdsController extends Controller
{
    public function index() {
        $commonCds = new Common_Cds();

        $commonCdsArr = $commonCds
                            ->whereUse_yn('Y')
                            ->whereDet_cd(0)
                            ->with([ 'user' ])
                            ->get();
//        dd($common_cds_arr);
        return view('admin.tool.common_cds.index')
            ->with('commonCdsArr' , $commonCdsArr);
    }


    public function create() {
        return view('admin.tool.common_cds.create');
    }

    public function save(Request $_req) {
//        dd(Auth::user()->id);
        $commonCds = new Common_Cds();
        $chkVal = $commonCds->mainCdChk($_req->input('mainCd'));
        if($chkVal > 0) {
            $_req->session()->flash('alert-warning', "사용중인 메인 코드 입니다. 확인 후 다시 입력해 주시기 바랍니다.");
            return back()->withInput();
        }

        $dataArr = [];
        foreach($_req->input('detCd') AS $arrKey => $arrVal) {
            $dataArr[] = array(
                'main_cd' => $_req->input('mainCd') ,
                'det_cd' => $arrVal ,
                'user_id' => $_req->input('name')[$arrKey] ,
                'name' => $_req->input('name')[$arrKey] ,
                'ref_1' => ($_req->input('ref1')[$arrKey] === null ? '' : $_req->input('ref1')[$arrKey]) ,
                'ref_2' => ($_req->input('ref2')[$arrKey] === null ? '' : $_req->input('ref2')[$arrKey]) ,
                'ref_3' => ($_req->input('ref3')[$arrKey] === null ? '' : $_req->input('ref3')[$arrKey]) ,
                'ref_4' => ($_req->input('ref4')[$arrKey] === null ? '' : $_req->input('ref4')[$arrKey]) ,
                'ref_5' => ($_req->input('ref5')[$arrKey] === null ? '' : $_req->input('ref5')[$arrKey]) ,
                'ref_6' => ($_req->input('ref6')[$arrKey] === null ? '' : $_req->input('ref6')[$arrKey]) ,
                'ref_7' => ($_req->input('ref7')[$arrKey] === null ? '' : $_req->input('ref7')[$arrKey]) ,
                'ref_8' => ($_req->input('ref8')[$arrKey] === null ? '' : $_req->input('ref8')[$arrKey]) ,
                'ref_9' => ($_req->input('ref9')[$arrKey] === null ? '' : $_req->input('ref9')[$arrKey]) ,
                'ref_10' => ($_req->input('ref10')[$arrKey] === null ? '' : $_req->input('ref10')[$arrKey])
            );
        }

        DB::beginTransaction();
        try {
            foreach ($dataArr AS $data) {
                $commonCds = new Common_Cds();

                $commonCds->main_cd = $_req->input('mainCd');
                $commonCds->det_cd = $data['det_cd'];
                $commonCds->user_id = Auth::user()->id;
                $commonCds->name = $data['name'];
                $commonCds->ref_1 = $data['ref_1'];
                $commonCds->ref_2 = $data['ref_2'];
                $commonCds->ref_3 = $data['ref_3'];
                $commonCds->ref_4 = $data['ref_4'];
                $commonCds->ref_5 = $data['ref_5'];
                $commonCds->ref_6 = $data['ref_6'];
                $commonCds->ref_7 = $data['ref_7'];
                $commonCds->ref_8 = $data['ref_8'];
                $commonCds->ref_9 = $data['ref_9'];
                $commonCds->ref_10 = $data['ref_10'];

                $commonCds->save();
            }

            DB::commit();

            return redirect( route('admin::tool::common::index') );
        } catch (\Exception $e) {
            DB::rollback();

            $_req->session()->flash('alert-warning', "등록 중 오류가 발생되었습니다.");
            return back()->withInput();
        }

    }


    public function show($common_main_cd) {
        $commonCds = new Common_Cds();

        $commonCdsArr = $commonCds->whereMain_cd($common_main_cd)->whereUse_yn('Y')->orderBy('det_cd' , 'ASC')->get();

        $tmpArr = [];
        foreach($commonCdsArr AS $commonCd) {
            if($commonCd->det_cd == 0) {
                $tmpArr['th'] = $commonCd;
            } else {
                $tmpArr['td'][] = $commonCd;
            }
        }

        return view('admin.tool.common_cds.show')
            ->with('mainCd' , $common_main_cd)
            ->with('commonCdsArr' , $tmpArr);
    }


    public function update(Request $_req) {
        // 수정

        $commonCds = new Common_Cds();
//        dd($_req);
        DB::beginTransaction();
        try {
            $commonCdsTop = $commonCds->whereMain_cd($_req->input('mainCd'))->whereDet_cd('0')->whereUse_yn('Y')->first();
            $commonCdsTop->name = ($_req->input('topName') === null ? '' : $_req->input('topName'));
            $commonCdsTop->ref_1 = ($_req->input('topRef1') === null ? '' : $_req->input('topRef1'));
            $commonCdsTop->ref_2 = ($_req->input('topRef2') === null ? '' : $_req->input('topRef2'));
            $commonCdsTop->ref_3 = ($_req->input('topRef3') === null ? '' : $_req->input('topRef3'));
            $commonCdsTop->ref_4 = ($_req->input('topRef4') === null ? '' : $_req->input('topRef4'));
            $commonCdsTop->ref_5 = ($_req->input('topRef5') === null ? '' : $_req->input('topRef5'));
            $commonCdsTop->ref_6 = ($_req->input('topRef6') === null ? '' : $_req->input('topRef6'));
            $commonCdsTop->ref_7 = ($_req->input('topRef7') === null ? '' : $_req->input('topRef7'));
            $commonCdsTop->ref_8 = ($_req->input('topRef8') === null ? '' : $_req->input('topRef8'));
            $commonCdsTop->ref_9 = ($_req->input('topRef9') === null ? '' : $_req->input('topRef9'));
            $commonCdsTop->ref_10 = ($_req->input('topRef10') === null ? '' : $_req->input('topRef10'));
            $commonCdsTop->save();

            foreach($_req['detCd'] AS $tmpKey => $tmpVal) {
                $commonCdsChk = $commonCds->whereMain_cd($_req->input('mainCd'))->whereDet_cd($tmpVal)->whereUse_yn('Y')->count();

                if($commonCdsChk == 1) {
                    $commonCdsData = $commonCds->whereMain_cd($_req->input('mainCd'))->whereDet_cd($tmpVal)->whereUse_yn('Y')->first();
                    $commonCdsData->name = ($_req->input('name')[$tmpKey] === null ? '' : $_req->input('name')[$tmpKey]);
                    $commonCdsData->det_cd = ($_req->input('detCd')[$tmpKey] === null ? '' : $_req->input('detCd')[$tmpKey]);
                    $commonCdsData->ref_1 = ($_req->input('ref1')[$tmpKey] === null ? '' : $_req->input('ref1')[$tmpKey]);
                    $commonCdsData->ref_2 = ($_req->input('ref2')[$tmpKey] === null ? '' : $_req->input('ref2')[$tmpKey]);
                    $commonCdsData->ref_3 = ($_req->input('ref3')[$tmpKey] === null ? '' : $_req->input('ref3')[$tmpKey]);
                    $commonCdsData->ref_4 = ($_req->input('ref4')[$tmpKey] === null ? '' : $_req->input('ref4')[$tmpKey]);
                    $commonCdsData->ref_5 = ($_req->input('ref5')[$tmpKey] === null ? '' : $_req->input('ref5')[$tmpKey]);
                    $commonCdsData->ref_6 = ($_req->input('ref6')[$tmpKey] === null ? '' : $_req->input('ref6')[$tmpKey]);
                    $commonCdsData->ref_7 = ($_req->input('ref7')[$tmpKey] === null ? '' : $_req->input('ref7')[$tmpKey]);
                    $commonCdsData->ref_8 = ($_req->input('ref8')[$tmpKey] === null ? '' : $_req->input('ref8')[$tmpKey]);
                    $commonCdsData->ref_9 = ($_req->input('ref9')[$tmpKey] === null ? '' : $_req->input('ref9')[$tmpKey]);
                    $commonCdsData->ref_10 = ($_req->input('ref10')[$tmpKey] === null ? '' : $_req->input('ref10')[$tmpKey]);
                    $commonCdsData->save();
                } else {
                    $commonCds = new Common_Cds();

                    $commonCds->main_cd = $_req->input('mainCd');
                    $commonCds->det_cd = $tmpVal;
                    $commonCds->user_id = Auth::user()->id;
                    $commonCds->name = ($_req->input('name')[$tmpKey] === null ? '' : $_req->input('name')[$tmpKey]);
                    $commonCds->ref_1 = ($_req->input('ref1')[$tmpKey] === null ? '' : $_req->input('ref1')[$tmpKey]);
                    $commonCds->ref_2 = ($_req->input('ref2')[$tmpKey] === null ? '' : $_req->input('ref2')[$tmpKey]);
                    $commonCds->ref_3 = ($_req->input('ref3')[$tmpKey] === null ? '' : $_req->input('ref3')[$tmpKey]);
                    $commonCds->ref_4 = ($_req->input('ref4')[$tmpKey] === null ? '' : $_req->input('ref4')[$tmpKey]);
                    $commonCds->ref_5 = ($_req->input('ref5')[$tmpKey] === null ? '' : $_req->input('ref5')[$tmpKey]);
                    $commonCds->ref_6 = ($_req->input('ref6')[$tmpKey] === null ? '' : $_req->input('ref6')[$tmpKey]);
                    $commonCds->ref_7 = ($_req->input('ref7')[$tmpKey] === null ? '' : $_req->input('ref7')[$tmpKey]);
                    $commonCds->ref_8 = ($_req->input('ref8')[$tmpKey] === null ? '' : $_req->input('ref8')[$tmpKey]);
                    $commonCds->ref_9 = ($_req->input('ref9')[$tmpKey] === null ? '' : $_req->input('ref9')[$tmpKey]);
                    $commonCds->ref_10 = ($_req->input('ref10')[$tmpKey] === null ? '' :$_req->input('ref10')[$tmpKey]);
                    $commonCds->save();
                }
            }

            DB::commit();

            return redirect( route('admin::tool::common::index') );
        } catch (\Exception $e) {
            DB::rollback();

            dd($e);
            $_req->session()->flash('alert-warning', "수정 중 오류가 발생되었습니다.");
            return back()->withInput();
        }
    }


}