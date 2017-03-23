<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 15.
 * Time: PM 4:29
 */

namespace App\Models\Bbs\Notice;

use Illuminate\Database\Eloquent\Model;

class Bbs_notice_file extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bbs_notice_file';

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
          'bbs_notice_id'
        , 'bbs_notice_file_sort'
        , 'bbs_notice_file_name'
        , 'bbs_notice_file_type'
        , 'bbs_notice_file_size'
        , 'bbs_notice_file_rename'
        , 'bbs_notice_file_url'
        , 'bbs_notice_file_use_yn'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function bbs_notice()
    {
        return $this->belongsTo('App\Models\Bbs\Notice\Bbs_notice' , 'bbs_notice_id');
    }
}