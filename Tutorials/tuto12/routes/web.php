<?php

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('articles', function (){
    // $tags = Tag::with('articles')->get();
    // foreach ($tags as $tag) {
    //     echo $tag->name . ' : ' . implode(', ', $tag->articles->pluck('title')->toArray());
    // }

    $article = Article::find(1);
    // $article->comments()->create(['content' => 'Super article !']);
    // dd($article->comments);

    // $video = Video::create(['title' =>'its a video', 'content' => true]);
    $video1 = Video::find(1);
    // $video1->comments()->create(['content' => 'Vidéo incroyable !']);
    dd($video1->comments);
});