<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function combos()
    {
        return view('frontend.comobs'); 
    }
}