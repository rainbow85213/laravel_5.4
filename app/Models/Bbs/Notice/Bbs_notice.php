<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 15.
 * Time: PM 4:28
 */

namespace App\Models\Bbs\Notice;

use DB;
use Illuminate\Database\Eloquent\Model;

class Bbs_notice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bbs_notice';

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
          'bbs_notice_sort'
        , 'bbs_notice_type'
        , 'bbs_notice_writer_id'
        , 'bbs_notice_title'
        , 'bbs_notice_push_yn'
        , 'bbs_notice_use_yn'
    ];

    /**
     * Get bbs_notice_sort Num
     */
    public function get_bbs_notice_sort_num() {
        $res = $this->select(DB::raw('MAX(bbs_notice_sort) AS max_num'))->whereBbs_notice_use_yn('Y')->first();

        if($res['max_num'] === null) {
            return 1;
        } else {
            return $res['max_num'] + 1;
        }
    }

    /**
     * Bbs Notice Writer Chk
     */
    public function auth_bbs_notice_write_chk($_id , $_authId) {
        $res = $this->whereId($_id)->first();

        if($res['bbs_notice_writer_id'] == $_authId) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the comments for the blog post.
     */
    public function bbs_notice_file()
    {
        return $this->hasMany('App\Models\Bbs\Notice\Bbs_notice' , 'id' , 'bbs_notice_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->belongsTo('App\User' , 'bbs_notice_writer_id');
    }
}