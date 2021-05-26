<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function author(){
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function category(){
        return $this->belongsToMany(Category::class, 'categories_posts', 'idPost', 'idCategory');
    }
}
