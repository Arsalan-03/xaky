<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{
    public function getMain()
    {
        return view('main');
    }
}
