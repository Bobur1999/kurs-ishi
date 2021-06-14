<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Models\book;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        $books = book::latest()->limit(6)->get();
        return view('home',compact('books'));
    }
    public function shop(){
        $books = book::latest()->limit(6)->get();
        return view('shop',compact('books'));
    }
    public function about(){
        return view('about');
    }
    public function batafsil($id){
        $book=book::findOrFail($id);
        return view('batafsil', compact('book'));
    }
    public function myorder(){
        
        return view('myorder');
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
    public function search(Request $request){
        $key = $request->get('key');
        $key = '%'.trim($key).'%';

        $books = book::where('nom', 'LIKE', $key)
                    ->orWhere('avtor', 'LIKE', $key)
                    ->orWhere('nashriyot', 'LIKE', $key)
                    ->orWhere('qisqacha', 'LIKE', $key)
                    ->get();

        return view('search', compact('books'));
    }
}
