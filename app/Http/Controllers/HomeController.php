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

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function storeLocator()
    {

        return view('frontend.pages.store-locator');
    }

    public function becomeARetailer()
    {
        return view('frontend.pages.become_a_retailer');
    }

    public function faqs()
    {
        return view('frontend.pages.faqs');
    }

    public function blogs()
    {
        return view('frontend.pages.blogs');
    }

    public function blogdetails()
    {
        return view('frontend.pages.blogdetails');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function compare(){
        return view('frontend.pages.compare');
    }
 
    public function trackorder(){
        return view('frontend.pages.trackorder');
    }
    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function cusion()
    {
        return view('frontend.pages.cusion');
    }
    public function pillow()
    {
        return view('frontend.pages.pillow');

    }
    public function product()
    {
        return view('frontend.products.product');
    }
}
