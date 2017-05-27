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

        Route::get('/create' , [
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


        Route::group([
            'as' => 'point::'
            , 'prefix' => 'point'
        ] , function() {

            Route::any('/' , [
                'as' => 'index'
                , 'uses' => 'Admin\Member\PointController@index'
            ]);

        });

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

            Route::get('/create' , [
                  'as' => 'create'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@create'
            ]);

            Route::post('/save' , [
                  'as' => 'save'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@save'
            ]);

            Route::get('/show/{id}' , [
                  'as' => 'show'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@show'
            ]);

            Route::post('/update' , [
                'as' => 'update'
                , 'uses' => 'Admin\Tool\Common_Cds\CommonCdsController@update'
            ]);

        });

    });


    // Admin BBS Notice Codes Page
    Route::group([
            'as' => 'bbs::'
        ,   'prefix' => 'bbs'
    ] , function() {

        Route::group([
              'as' => 'notice::'
            , 'prefix' => 'notice'
        ] , function() {

            Route::any('/' , [
                  'as' => 'index'
                , 'uses' => 'Admin\Bbs\Notice\BbsNoticeController@index'
            ]);

            Route::get('/create' , [
                  'as' => 'create'
                , 'uses' => 'Admin\Bbs\Notice\BbsNoticeController@create'
            ]);

            Route::post('/save' , [
                  'as' => 'save'
                , 'uses' => 'Admin\Bbs\Notice\BbsNoticeController@save'
            ]);

            Route::get('/show/{id}' , [
                  'as' => 'show'
                , 'uses' => 'Admin\Bbs\Notice\BbsNoticeController@show'
            ]);

            Route::post('/update' , [
                  'as' => 'update'
                , 'uses' => 'Admin\Bbs\Notice\BbsNoticeController@update'
            ]);

            Route::any('/img_upload' , [
                  'as' => 'img_upload'
                , 'uses' => 'Admin\Bbs\Notice\BbsNoticeController@img_upload'
            ]);

        });

        Route::group([
            'as' => 'review::'
            , 'prefix' => 'review'
        ] , function() {

            Route::any('/' , [
                'as' => 'index'
                , 'uses' => 'Admin\Bbs\Review\ReviewBaseController@index'
            ]);

            Route::get('/create' , [
                'as' => 'create'
                , 'uses' => 'Admin\Bbs\Review\ReviewBaseController@create'
            ]);

            Route::post('/save' , [
                'as' => 'save'
                , 'uses' => 'Admin\Bbs\Review\ReviewBaseController@save'
            ]);

            Route::get('/show/{review_id}' , [
                'as' => 'show'
                , 'uses' => 'Admin\Bbs\Review\ReviewBaseController@show'
            ]);

            Route::post('/update' , [
                'as' => 'update'
                , 'uses' => 'Admin\Bbs\Review\ReviewBaseController@update'
            ]);

        });

    });

});
