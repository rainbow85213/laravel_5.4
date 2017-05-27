<?php
/**
 * Created by PhpStorm.
 * User: rainbow85213
 * Date: 2017. 2. 18.
 * Admin Page DashBoard Conroller
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public $side = "policy";

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
        return view('admin.index')
            ->with('side' , $this->side);
    }
}
