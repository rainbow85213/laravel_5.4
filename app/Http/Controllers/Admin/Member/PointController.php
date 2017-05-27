<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 4. 22.
 * Time: AM 1:11
 */

namespace App\Http\Controllers\Admin\Member;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public $side = "member";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $_req) {

        return view('admin.member.point.index')
            ->with('side' , $this->side);

    }

}