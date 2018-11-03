<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\user\post;

class PostController extends Controller
{
     public function post(post $post)
    {
    	

    	return view('user.post',compact('post'));
    }

    public function getAllPosts()
    {
    	return    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);

    }
}
