<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts',[
        'title' => 'Blog'
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact Us'
    ]);
});
