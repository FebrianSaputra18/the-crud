<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    protected $fillable = ['product_name','price','stock'];
}

