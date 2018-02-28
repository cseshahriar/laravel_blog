<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{	
   public function post(Post $post)        
   {
     return view('user.post', compact('post'));   
   }
}
