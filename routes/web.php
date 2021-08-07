<?php

use App\Events\PostCreated;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('store', function () {

    $user = User::first();

    $post = $user->posts()->create([
        'title' => Str::random(20),
        'body' => Str::random(100)
    ]);

    event(new PostCreated($post));

    return 'OK';
});

Route::get('/', function () {
    return view('welcome');
});
