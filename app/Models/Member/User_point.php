<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 23.
 * Time: PM 4:33
 */

namespace App\Models\Member;

use App\User;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class User_point extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_point';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'point_relation_id'
        , 'user_id'
        , 'point_type'
        , 'point'
        , 'prev_point'
        , 'next_point'
        , 'point_commnet'
    ];

    public function user_point_chk($user_id) {
        $user = new User();

        $userData = $user->select('point')->whereId($user_id)->first();

        return $userData->point;
    }


    public function point_calc($_type , $_point , $_userPoint) {
        $returnArr = [
            "resultCode" => true
        ];

        $returnArr['prev_point'] = $_userPoint;
        if($_type == 1) {
            // 적립
            $returnArr['next_point'] = $_userPoint + $_point;
        } else {
            // 사용 , 소멸
            if($_userPoint < $_point) {
                $returnArr['resultCode'] = false;
                $returnArr['next_point'] = $_userPoint - $_point;
            } else {
                $returnArr['next_point'] = $_userPoint - $_point;
            }
        }

        return $returnArr;
    }


    /**
     * 유저 포인트 생성
     */
    public function user_point_create($_req) {
        DB::beginTransaction();
        try {
            // 1. user_point에 레코드 생성
            $this->insertGetId([
                [
                    "point_relation_id" => $_req['pointRelationId']
                    , "user_id" => $_req['userId']
                    , "point_type" => $_req['pointType']
                    , "point" => $_req['point']
                    , "prev_point" => $_req['prevPoint']
                    , "next_point" => $_req['nextPoint']
                    , "point_comment" => $_req['pointComment']
                ]
            ]);

            // 2. users Table에 point에 계산된 point 넣기
            $user = new User();
            $user->whereId($_req['userId'])->update(["point" => $_req['nextPoint']]);
            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollback();

            return false;
        }
    }


    /**
     * 유저 포인트 생성에 따른 체크
     */
    public function user_point_param_chk($_mode , $_req) {
        // 체크 포인트 ( 회원번호 , 포인트 구분 , 포인트 값 )
        $_returnArr = [
            "resultCode" => true
        ];

        if($_mode != "create" && (trim($_req['userPointId']) == "" || !isset($_req['userPointId'])) ) {
            $_returnArr['resultCode'] = false;
            $_returnArr['resultMsg'] = "[알림!] 유저 포인트 정보를 찾을 수 없습니다.";

            return $_returnArr;
        }

        if($_mode == "create" && (trim($_req['userId']) == "" || !isset($_req['userId'])) ) {
            $_returnArr['resultCode'] = false;
            $_returnArr['resultMsg'] = "[알림!] 포인트를 등록 할 아이다가 없습니다.";

            return $_returnArr;
        }

        if($_mode == "create" && (trim($_req['pointType']) == "" || !isset($_req['pointType'])) ) {
            $_returnArr['resultCode'] = false;
            $_returnArr['resultMsg'] = "[알림!] 포인트의 구분 값이 없습니다.";

            return $_returnArr;
        }

        if($_mode == "create" && (trim($_req['pointVal']) == "" || !isset($_req['pointVal'])) ) {
            $_returnArr['resultCode'] = false;
            $_returnArr['resultMsg'] = "[알림!] 등록 할 포인트 값이 없습니다.";

            return $_returnArr;
        }

        return $_returnArr;
    }


    /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }
}