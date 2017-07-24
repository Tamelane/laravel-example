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
    	$order=new Order;
    	$order->product_id=request('product_id');
    	$order->user_id=request('user_id');
    	$order->price=(request('price')*request('quantity'));
    	$order->quantity=request('quantity');
    	$order->save();
    	//Session::flash('text','Order "'.$category->name.'" '.'Added');
    	return back();
    	return redirect('/');
    	
	}
	public function addItemToCart(Request $request)
	{
		return 'qwe';
	}
}
