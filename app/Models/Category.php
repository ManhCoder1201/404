<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public function product(){
         return $this->hasMany('App\Models\Product');
    }
    protected $filltable = ['categoryID','categoryName','categoryDescription'];
}