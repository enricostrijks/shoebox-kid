<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function home() { return view('home'); }

    function over() { return view('over'); }

    function cart() { return view('cart'); }
    
    function profile() { return view('profile'); }

    function product() { return view('product'); }

    function products() { return view('products'); }
}
