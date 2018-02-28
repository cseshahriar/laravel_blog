<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//posts from category 
    public function posts()  
    {
    	//when need posts from category        
    	return $this->belongsToMany('App\Model\user\Post', 'category_posts')->orderBy('created_at', 'DESC')->paginate(5); //table_name     
    	//every category has many post
    }   

    public function getRouteKeyName()
    {
    	return 'slug'; 
    }
}
