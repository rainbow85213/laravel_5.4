<?php

namespace App\Models\Tool;

use Illuminate\Database\Eloquent\Model;

class Common_cds extends Model
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
    protected $fillable = [ 'main_cd' , 'det_cd' ];


}
