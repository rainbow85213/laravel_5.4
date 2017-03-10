<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 9.
 * Time: PM 3:01
 */

namespace App\Http\Controllers\Admin\Tool\Common_Cds;


use App\Http\Controllers\Controller;
use App\User;
use App\Models\Tool\Common_Cds\Common_Cds;
use Illuminate\Http\Request;

class CommonCdsController extends Controller
{
    public function index() {
        $common_cds = new Common_Cds();

        $common_cds_arr = $common_cds
                            ->whereUse_yn('Y')
                            ->get();

        return view('admin.tool.common_cds.index')
            ->with('common_cds_arr' , $common_cds_arr);
    }


    public function create() {
        $user = new User();

        return view('admin.tool.common_cds.create');
    }

    public function save(Request $_req) {
        dd($_req);
    }
}