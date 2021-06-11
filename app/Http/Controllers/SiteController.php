<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Models\book;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('home');
    }
    public function shop(){
        $books = book::all();
        return view('shop',compact('books'));
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

        Feedback::create([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'email' => $request->post('email'),
            'subject' => $request->post('subject'),
            'message' => $request->post('message')
        ]);

        return redirect()
            ->route('cantact')
            ->with('success', 'Xabaringgiz uchun rahmat! Tez orada siz bilan bog`lanamiz!');
    }
    public function showBook($id){
        $book = book::findOrFail($id);
        return view('showBook',compact('book'));
    }
    public function order($id){
        $book=book::findOrFail($id);
        return view('order',compact('book'));
    }
}
