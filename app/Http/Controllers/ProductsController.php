<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
	public function index () {
		$products = Product::all();
		return view('products.index', compact('products'));
	}

    public function show ($id) {
        
    	$products = Product::find($id);
    	return view('products.details', compact('products'));
    }

    public function filterByName ($name) {
        $products = Product::where('name','LIKE','%'.$name.'%')->first();
       	return view('products.show', compact('products'));
    }

    public function filterByCategoryName ($category_name) {

        $products = Product::whereHas('category', function($q) use($category_name) {
            $q->where('name', $category_name);
        })->get();
        return view('products.index', ['products' => $products, 'category' => $category_name]);
    }
    public function search(Request $request)
    {   
        $search=$request->get('search');
        $products = Product::where('name','LIKE','%'.$search.'%')->get();
    return view('products.show', compact('products'));
    }
}
