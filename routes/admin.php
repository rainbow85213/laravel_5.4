<?php

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group([
    'as' => 'admin::'
    ,   'prefix' => 'admin'
    ,   'middleware' => 'auth'
] , function() {
    // Admin Dashboard Page
    Route::get('/' , [
        'as' => 'index'
        ,   'uses' => 'Admin\DashBoardController@index'
    ]);

    // Admin Member Page
    Route::group([
        'as' => 'member::'
        ,   'prefix' => 'member'
    ] , function() {

        Route::any('/' , [
            'as' => 'index'
            ,   'uses' => 'Admin\Member\MemberController@index'
        ]);

        Route::any('/create' , [
            'as' => 'create'
            ,   'uses' => 'Admin\Member\MemberController@create'
        ]);

    });
});
