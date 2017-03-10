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

        Route::post('/save' , [
                'as' => 'save'
            ,   'uses' => 'Admin\Member\MemberController@save'
        ]);

        Route::get('/show/{id}' , [
                'as' => 'show'
            ,   'uses' => 'Admin\Member\MemberController@show'
        ]);

        Route::post('/update' , [
            'as' => 'update'
            ,   'uses' => 'Admin\Member\MemberController@update'
        ]);

        Route::get('/destory/{id}' , [
                'as' => 'destory'
            ,   'uses' => 'Admin\Member\MemberController@destory'
        ]);

    });

    // Admin Notice Page
    Route::group([
            'as' => 'notice::'
        ,   'prefix' => 'notice'
    ] , function() {

        Route::any('/' , [
                'as' => 'index'
            ,   'uses' => 'Admin\Member\MemberController@index'
        ]);

        Route::any('/create' , [
                'as' => 'create'
            ,   'uses' => 'Admin\Member\MemberController@create'
        ]);

        Route::post('/save' , [
                'as' => 'save'
            ,   'uses' => 'Admin\Member\MemberController@save'
        ]);

        Route::get('/show/{id}' , [
                'as' => 'show'
            ,   'uses' => 'Admin\Member\MemberController@show'
        ]);

        Route::post('/update' , [
                'as' => 'update'
            ,   'uses' => 'Admin\Member\MemberController@update'
        ]);

        Route::get('/destory/{id}' , [
                'as' => 'destory'
            ,   'uses' => 'Admin\Member\MemberController@destory'
        ]);

    });

    // Admin Common Codes Page
    Route::group([
            'as' => 'tool::'
        ,   'prefix' => 'tool'
    ] , function() {

        Route::group([
              'as' => 'common::'
            , 'prefix' => 'common'
        ] , function() {

            Route::any('/' , [
                'as' => 'index'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@index'
            ]);

            Route::any('/create' , [
                    'as' => 'create'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@create'
            ]);

            Route::any('/save' , [
                'as' => 'save'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@save'
            ]);

        });

    });
});
