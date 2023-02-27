<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
use App\Models\Comment ;

class postController extends Controller
{
    // default page
    public function __invoke()
    {
        return ("default page");
    } 
    // get posts list
    public function postsList() 
    {
        $posts=Post::get();
        return view("posts.postsList" , compact("posts"));
    }
    // get post
    public function post(Post $post) 
    {
        return view("posts.post" , compact("post"));
    }
    // create post
    public function create_post ()
    {
        return view("posts.createNewPost");
    }
    public function save_post(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required|max:255',
            'content'=>'required',
        ]);
    
        $post = new Post;
        $post->title=$validatedData['title'];
        $post->content=$validatedData['content'];
        $post->user_id = rand(1,10);
        $post->save();
        session()->flash('success', 'Post created successfully!');
        return redirect("/posts");
    }
    // update post
    public function update_postForm(Post $post) 
    {
        return view("posts.updatePost" , compact("post"));
    }
    public function update_post(Request $request , $id)
    {
        $validatedData = $request->validate([
            'title'=> 'required|max:255',
            'content'=>'required',
        ]);
        $post = Post::findOrFail($id) ;
        if($post) {
            $post ->title =  $validatedData["title"];
            $post ->content =  $validatedData["content"];
            $post->save();
            session()->flash("success" , "post updated successfully");
            return redirect("/posts");
        }
    }
    // delete post
    public function delete_post(Post $post)
    {
        $post->delete();
        session()->flash("success" , "Post deleted successfully");
        return redirect("/posts");
    }
}