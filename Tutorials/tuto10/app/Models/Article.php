<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ["title","content","user_id","category_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
