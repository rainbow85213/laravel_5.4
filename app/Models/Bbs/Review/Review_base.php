<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 31.
 * Time: AM 9:30
 */

namespace App\Models\Bbs\Review;


use Illuminate\Database\Eloquent\Model;

class Review_base extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'review_base';

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
          'sort'
        , 'user_id'
        , 'cate_cd'
        , 'r_title'
        , 'r_content'
        , 'r_star'
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
     * Get the comments for the blog post
     */
    public function company_base()
    {
        return $this->belongsToMany('App\Models\Company\Company_base');
    }

}






