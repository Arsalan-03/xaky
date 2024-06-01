<?php

namespace App\Http\Controllers;

use App\Models\Category;

class MainController extends Controller
{
    public function getMain()
    {
        $categories = Category::all();
        return view('main', ['categories' => $categories]);
    }
}
