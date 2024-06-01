<?php

namespace App\Http\Controllers\Admin;

class ProductController
{
    public function getProducts()
    {
        return view('admin.products');
    }
}
