<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('home');
    }
    public function shop(){
        return view('shop');
    }
    public function about(){
        return view('about');
    }
    public function cantact(){
        return view('cantact');
    }
}
