<?php

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('articles', function () {
    $tags = Tag::with('articles')->get();
    foreach ($tags as $tag) {
        echo $tag->name . ' : ' . implode(', ', $tag->articles->pluck('title')->toArray());
    }
});
