<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

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

Route::get('/posts/{slug}', function ($slug) {
    $post = Post:: find($slug);
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

