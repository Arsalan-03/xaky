<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::find(1);
      dump($products);
    }
}
