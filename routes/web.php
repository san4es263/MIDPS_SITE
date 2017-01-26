<?php

use App\Post;

Route::get('/', function () {
    return view('home');
});

Route::get('/static_1.html', function () {
    return view('static/static_1');
});

Route::get('/static_2.html', function () {
    return view('static/static_2');
});

Route::get('/static_3.html', function () {
    return view('static/static_3');
});

Route::get('/posts', [
    'as' => 'index_posts',
    'uses' => function () {
        $posts = Post::all();

        return view('posts', [ 'posts' => $posts ]);
    }
]);
