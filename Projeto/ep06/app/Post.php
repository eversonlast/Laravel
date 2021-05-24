<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'post';
    //para tirar o campo do $timestamps e tira da migration
    // public $timestamps = false;

    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];


    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
