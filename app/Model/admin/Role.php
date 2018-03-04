<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
    	//many to many 
    	return $this->belongsToMany('App\Model\admin\Permission'); 
    }
}
