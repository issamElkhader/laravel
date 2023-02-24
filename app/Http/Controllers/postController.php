<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;

class postController extends Controller
{
    public function __invoke()
    {
        return ("default page");
    } 
    
    public function index() 
    {
        $posts=Post::on('mysql')->get();
        return view("posts.index" , compact("posts"));
    }
    public function show(Post $post) 
    {
        return view("posts.show" , compact("posts"));
    }
}