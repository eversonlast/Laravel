<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts(){
        return $this->belongsToMany(Post::class, 'categories_posts', 'idCategory', 'idPost');
    }
}
