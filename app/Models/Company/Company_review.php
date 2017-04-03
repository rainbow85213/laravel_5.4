<?php
/**
 * Created by PhpStorm.
 * User: rainbow
 * Date: 2017. 3. 31.
 * Time: AM 10:18
 */

namespace App\Models\Company;


use Illuminate\Database\Eloquent\Model;

class Company_review extends Model
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
        'review_base_id'
        , 'company_base_id'
        , 'use_yn'
    ];

    /**
     * The users that belong to the role.
     */
    public function review_base()
    {
        return $this->belongsToMany('App\Models\Company\Company_base')->using('App\Models\Company\Company_review');
    }
}