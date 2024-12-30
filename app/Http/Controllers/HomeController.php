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
        return view('frontend.collections.comobs');
    }

    public function bestSellers()
    {
        return view('frontend.collections.bestsellers');
    }

    public function newLaunches()
    {
        return view('frontend.collections.new-launches');
    }

    public function inshole()
    {
        return view('frontend.inshole');
    }
}
