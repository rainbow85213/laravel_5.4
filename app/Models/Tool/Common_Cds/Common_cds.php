<?php

namespace App\Models\Tool\Common_Cds;

use Illuminate\Database\Eloquent\Model;

class Common_Cds extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'common_cds';

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
          'main_cd'
        , 'det_cd'
        , 'user_id'
        , 'name'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }


    public function mainCdChk($main_cd) {
        return $this->whereMain_cd($main_cd)->whereUse_yn('N')->count();
    }

}
