<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 2. 18.
 * Time: AM 1:28
 */

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;

use App\User;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User();

        $user_arr = $users->all();

        return view('admin.member.index')
                ->with('user_arr' , $user_arr);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create');
    }
}