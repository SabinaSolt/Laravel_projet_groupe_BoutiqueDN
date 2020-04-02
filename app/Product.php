<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','image','weight','stockquantity',
        'available','price', 'categoryId','updated_at','created_at'];
}
