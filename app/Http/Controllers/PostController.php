<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::latest()->get()
        ]);
    }

    public function showPost(Post $post){
        return view('post', [
            'title' => 'Post',
            'post' => $post
        ]);
    }


}
