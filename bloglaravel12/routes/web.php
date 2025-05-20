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
    $posts = Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString();
    return view('posts',['title' => 'Blog','posts' => $posts]);
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

