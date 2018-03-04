<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
     public function roles()
    {
    	//many to many 
    	return $this->belongsToMany('App\Model\admin\Role');
    }
}
