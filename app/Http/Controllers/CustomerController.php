<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller
{

    public function customerLogin(){
        return view('customerLogin');
    }
    

    public function create(){
        return view('customerRegister');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $customer = User::create([
            'name'  => $request->post('name'),
            'email' => $request->post('email'),
            'password' => bcrypt($request->post('password')),
        ]);
        $customer->getCustomer()->create();
        return redirect()->route('home');    
    }
}
