<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'admin'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
//    public function buildings()
//    {
//        return $this->hasMany('App\Building');
//    }
}
