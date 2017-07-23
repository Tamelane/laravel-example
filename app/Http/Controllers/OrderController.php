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

    	/*id, name, quantity, price
    	Cart::add('293ad', 'Product 1', 1, 9.99);
		Cart::add('293ad', 'Product 1', 1, 9.99, ['size' => 'large']);
Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large']]);



    	*/
    	$order=new Order;
    	$order->product_id=request('product_id');
    	$order->user_id=request('user_id');
    	$order->price=(request('price')*request('quantity'));
    	$order->quantity=request('quantity');
    	$order->save();
    	//Session::flash('text','Order "'.$category->name.'" '.'Added');
    	/*$data = $request->session()->all();
    	$request->session()->flash('status', 'Task was successful!');*/
    	return back();
    	return redirect('/');
    	
	}
	public function addItemToCart(Request $request)
	{
		return 'qwe';
	}
}
