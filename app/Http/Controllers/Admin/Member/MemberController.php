<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 2. 18.
 * Time: AM 1:28
 */

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

        $user_arr = $users
                    ->whereUse_yn('Y')
                    ->get();

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


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        list($membEmailId , $membEmailAddr) = @explode('@' , $request->input('membEmail'));

        $user = new User();

        $user->email        = $request->input('membEmail');
        $user->email_id     = $membEmailId;
        $user->email_addr   = $membEmailAddr;
        $user->name         = $request->input('membName');
        $user->password     = bcrypt($request->input('membPw'));
        $user->user_hp      = $request->input('membHp');
        $user->memb_type    = $request->input('membType');
        if($request->input('membType') == "admin") $user->company_type = $request->input('inputCompanyGroup');

        $user->save();

        return redirect(route('admin::member::index'));

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user = new User();
        $userArr = $user->whereId($user_id)->first();

//        dd($userArr);

        return view('admin.member.show')
                ->with('userArr' , $userArr);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        list($membEmailId , $membEmailAddr) = @explode('@' , $request->input('membEmail'));

        $user = new User();

        $user = $user->whereId($request->input('userId'))->first();

        $user->email        = $request->input('membEmail');
        $user->email_id     = $membEmailId;
        $user->email_addr   = $membEmailAddr;
        $user->name         = $request->input('membName');
        $user->password     = bcrypt($request->input('membPw'));
        $user->user_hp      = $request->input('membHp');
        $user->memb_type    = $request->input('membType');
        if($request->input('membType') == "admin") $user->company_type = $request->input('inputCompanyGroup');

        $user->save();

        return redirect(route('admin::member::index'));

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function destory($user_id)
    {
        $user = new User();
        $user = $user->whereId($user_id)->first();

        $user->use_yn = 'N';
        $user->save();

        return redirect(route('admin::member::index'));
    }
}