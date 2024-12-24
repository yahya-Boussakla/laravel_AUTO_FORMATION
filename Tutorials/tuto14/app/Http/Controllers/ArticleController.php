<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function update(Request $request, Article $article)
    {
        $this->authorize('update', $article);
        dd('jyghg');
    }
}
