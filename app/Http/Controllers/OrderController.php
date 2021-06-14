<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Customer;
use App\Models\book;

class OrderController extends Controller
{
    public function orderStore(Request $request){
       
        $request->validate([
            'region' => 'required',
            'city' => 'required',
            'street' => 'required'
        ]);
        $customer_id = Customer::where('user_id', '=',auth()->user()->id)->get();
        $address_data = [
            'customer_id' =>$customer_id[0]->id ,
            'region' => $request->post('region'),
            'city' => $request->post('city'),
            'street' => $request->post('street'),
        ];
        $address = Address::create($address_data);
        $order = $address -> getOrder() -> create();
        $product = book::findOrFail($request->post('book_id'));
        $product_data = [
            'book_id' => $product->id,        
        ];
        $order->getOrderProducts()->create($product_data);
        $books = book::latest(6)->get();
        return view('home',compact('books'));
            
    }
}
