<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function getMain()
    {
        $image = Product::where('name', 'Каноха');
        return view('main', ['image' => $image]);
    }
}
