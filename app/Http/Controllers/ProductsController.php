<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;
class ProductsController extends Controller
{
	public function index () {
		$products = Product::all();
		return view('products.index', compact('products'));
	}

    public function show ($id) {
        
    	$products = Product::find($id);
        $posts=Post::latest()->where('product_id',$products->id)->get();
    	return view('products.details', compact('products','posts'));
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
        $search=preg_replace('/[^A-Za-z0-9\-]/', '', $search);
        $products = Product::where('name','LIKE','%'.$search.'%')->get();
        return view('products.show', compact('products'));
    }
}
