<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home',[
        'title' => 'Home Page'
    ]);
});
Route::get('/home', function () {
    return view('home',[
        'title' => 'Home Page'
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About'
    ]);
});
Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts',['title' => 'Blog','posts' => $posts]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts',['title' =>count($user->posts) . ' Artikel By. '. $user->name,'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts',['title' => 'Category : '. $category->name,'posts' => $category->posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact Us'
    ]);
});

