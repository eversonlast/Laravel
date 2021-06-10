<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Imagem extends Model
{
    protected $table ='products_imagens';
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Product::class, 'products', 'id');
    }
}
