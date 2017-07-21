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
    	$product = Product::find($id);

    	return view('products.show', compact('product'));
    }

    public function filterByName ($name) {
    	$product = Product::where('name', $name)->first();

    	return view('products.show', compact('product'));
    }

    public function filterByCategoryName ($category_name) {
        $products = Product::whereHas('category', function($q) use($category_name) {
            $q->where('name', $category_name);
        })->get();

        return view('products.index', ['products' => $products, 'category' => $category_name]);
    }
}
