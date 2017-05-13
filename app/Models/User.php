<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "uet_users";
    
    protected $fillable = [
        'name', 'email', 'password', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function subject(){
        return $this->hasMany('App\Models\Subject');
    }
    
    public function test(){
        return $this->hasMany('App\Models\Test');
    }
    
    public function question(){
        return $this->hasMany('App\Models\Question');
    }
}
