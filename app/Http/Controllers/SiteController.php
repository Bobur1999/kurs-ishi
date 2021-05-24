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
    public function feedbackStore(Request $request){
        $request ->validate([
            'first_name' => 'required|min:3|max:100',
            'last_name' => 'required|min:5|max:200',
            'email' => 'required|email',
            'subject' => 'required|min:10',
            'message' => 'required|max:2048'
        ]);

        return redirect()
            ->route('cantact')
            ->with('success', 'Xabaringgiz uchun rahmat! Tez orada siz bilan bog`lanamiz!');
    }
}
