<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
   		$posts = Post::where('status', 1)->paginate(3); 

   		return view('user.blog', compact('posts'));     
   }
}
