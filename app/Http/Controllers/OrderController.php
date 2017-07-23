<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;
use \App\Order;
class OrderController extends Controller
{
    public function addToCart(Request $request)
    {
    	//dd($request);

    	$order=new Order;
    	$order->product_id=request('product_id');
    	$order->user_id=request('user_id');
    	$order->price=request('price');
    	$order->quantity=request('quantity');
    	$order->save();
    	//Session::flash('text','Order "'.$category->name.'" '.'Added');
    	/*$data = $request->session()->all();
    	$request->session()->flash('status', 'Task was successful!');*/
    	return back();
    	return redirect('/');
    	
	}
}
