<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public function category(){
        return $this->belongTo('App\Models\Category','categoryID');
    }
    protected $filltable = ['productID','productName','productDescription','productPrice','productImage','supplierID','categoryID'];

}
