<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// get posts list
Route::get("/posts" , [PostController::class, 'postsList'])->name("posts.postsList");
// get post 
Route::get("/posts/post/{post}" , [PostController::class, 'post'])->name("posts.post");
// create a new post
Route::get("/posts/createNewPost" , [postController::class , "create_post"])->name("posts.create_post");
Route::post("/posts/createNewPost" , [postController::class , "save_post"])->name("posts.save_post");
// update post
Route::get("/posts/updatePost/{post}" , [postController::class , "update_postForm"])->name("posts.update_postForm");
Route::match(['GET', 'PATCH'] , "/posts/updatePost/{post}/update" , [postController::class , "update_post"])->name("posts.update_post");
//delete post
Route::match(['GET', 'DELETE'] , "posts/{post}" , [postController::class , "delete_post"])->name("posts.delete_post");
