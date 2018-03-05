<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{ 
    use Notifiable;  

    //every admin user has many roles  
    public function roles()
    {
        return $this->belongsToMany('App\Model\admin\Role');
    }


    //accessor (effect from database) 
    public function getNameAttribute($value) 
    {
        return ucfirst($value);  
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','phone', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
