<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
    $posts = [
        [
        'id' => 1,
        'title' => 'Judul Artikel 1',
        'slug' => 'judul-artiker-1',
        'author' => 'Aldira Givari',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. '
        ],
        [
        'id' => 2,
        'title' => 'Judul Artikel 2',
        'slug' => 'judul-artiker-2',
        'author' => 'Aldira Givari',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. '
        ]
    ];
    return view('posts',['title' => 'Blog','posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
   $posts = [
        [
        'id' => 1,
        'title' => 'Judul Artikel 1',
        'slug' => 'judul-artiker-1',
        'author' => 'Aldira Givari',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. '
        ],
        [
        'id' => 2,
        'title' => 'Judul Artikel 2',
        'slug' => 'judul-artiker-2',
        'author' => 'Aldira Givari',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. '
        ]
    ];
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    }); 
    if (!$post) {
        abort(404);
    }
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

