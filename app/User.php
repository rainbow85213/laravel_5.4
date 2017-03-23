<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'email'
        ,   'email_id'
        ,   'email_addr'
        ,   'name'
        ,   'password'
        ,   'user_hp'
        ,   'point'
        ,   'cash'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function commcds()
    {
        return $this->hasMany('App\Models\Tool\Common_cds\Common_Cds' , 'id' , 'user_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function bbs_notice()
    {
        return $this->hasMany('App\Models\Bbs\Notice\Bbs_Notice' , 'id' , 'bbs_notice_writer_id');
    }
}
