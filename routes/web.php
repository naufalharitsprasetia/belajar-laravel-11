<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Naufal Harits']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Naufal Harits',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odit adipisci,
            obcaecati, enim, blanditiis ssumenda quam nihil aut error minus sunt. Iusto, illo fugit e'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Prasetia harits',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odit adipisci,
            obcaecati, enim, blanditiis ssumenda quam nihil aut error minus sunt. Iusto, illo fugit e'
        ]
    ]]);
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Naufal Harits',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odit adipisci,
            obcaecati, enim, blanditiis ssumenda quam nihil aut error minus sunt. Iusto, illo fugit e'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Prasetia harits',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odit adipisci,
            obcaecati, enim, blanditiis ssumenda quam nihil aut error minus sunt. Iusto, illo fugit e'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => ' Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});