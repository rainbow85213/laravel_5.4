<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 4. 3.
 * Time: AM 9:20
 */

namespace App\Http\Controllers\Admin\Bbs\Review;

use Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewBaseController extends Controller
{
    public $side = "review";


    /**
     * Review List Controller
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function index(Request $_req) {
        // 작성자 아이디
        $userId = Auth::user()->id;

        // 게시판 리뷰 리스트

        return view('admin.bbs.review.index')
            ->with('side' , $this->side)
            ->with('userId' , $userId);
    }


    /**
     * Review Create Controller
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function create() {
        // 작성자 아이디
        $userId = Auth::user()->id;

        // 게시판 리뷰 리스트

        return view('admin.bbs.review.create')
            ->with('side' , $this->side)
            ->with('userId' , $userId);
    }


    /**
     * Review store Controller
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function store(Request $_req) {
        // 작성자 아이디
        $userId = Auth::user()->id;
    }


    /**
     * Review show Controller
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function show($review_id) {
        // 작성자 아이디
        $userId = Auth::user()->id;

        return view('admin.bbs.review.create')
            ->with('side' , $this->side)
            ->with('userId' , $userId);
    }


    /**
     * Review update Controller
     * @ Developer : Rainbow85213
     * @ Created : 2017.03.15
     */
    public function update(Request $_req) {
        // 작성자 아이디
        $userId = Auth::user()->id;
    }

}