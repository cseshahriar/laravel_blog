<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //we can collect to post according to tags 
    public function posts()
    {
    	//when need post from a tag 
    	return $this->belongsToMany('App\Model\user\Post', 'Post_tags');   
    	//every tag has many post
    }
}
