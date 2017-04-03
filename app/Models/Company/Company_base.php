<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 31.
 * Time: AM 10:07
 */

namespace App\Models\Company;


use Illuminate\Database\Eloquent\Model;

class Company_base extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company_base';

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
          'user_id'
        , 'cate_cd'
        , 'cp_name'
        , 'cp_post_cd'
        , 'cp_new_post_cd'
        , 'cp_addr_base'
        , 'cp_addr_detail'
        , 'cp_phone'
        , 'cp_gps_lat'
        , 'cp_gps_lng'
        , 'cp_vphone'
        , 'comment_yn'
        , 'use_yn'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function review_base()
    {
        return $this->belongsToMany('App\Models\Bbs\Review\Review_base');
    }
}