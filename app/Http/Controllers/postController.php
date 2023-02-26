<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
use App\Models\Comment ;

class postController extends Controller
{
    public function __invoke()
    {
        return ("default page");
    } 
    
    public function postsList() 
    {
        $posts=Post::get();
        return view("posts.postsList" , compact("posts"));
    }
    public function post(Post $post) 
    {
        return view("posts.post" , compact("post"));
    }
}