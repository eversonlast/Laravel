<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function imagens(){
        return $this->hasMany(Product_Imagem::class, 'products_imagens', 'product');
    }
}
