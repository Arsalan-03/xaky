<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController
{
    public function getCombo()
    {
        return view('products.combo');
    }

    public function getBranded()
    {
        return view('products.branded');
    }

    public function getBaked()
    {
        $products = Product::where('category_id', 3)->get();
        return view('products.baked', ['products' => $products]);
    }

    public function getCold()
    {
        return view('products.cold');
    }

    public function getTempura()
    {
        return view('products.tempura');
    }

    public function getSets()
    {
        return view('products.sets');
    }

    public function getPizza()
    {
        return view('products.branded');
    }

    public function getSnacks()
    {
        return view('products.snacks');
    }

    public function getBeverages()
    {
        return view('products.beverages');
    }

    public function getUdon()
    {
        return view('products.udon');
    }

    public function getChildrenSets()
    {
        return view('products.childrenSets');
    }

    public function getAdditional()
    {
        return view('products.additional');
    }

    public function getClassic()
    {
        return view('products.classic');
    }

    public function getSushi()
    {
        return view('products.sushi');
    }

    public function getBurgers()
    {
        return view('products.burgers');
    }
}
