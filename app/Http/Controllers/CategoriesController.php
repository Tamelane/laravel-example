<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
	public function index () {
		$categories = Category::all();

		return view('categories.index', compact('categories'));
	}

    public function show ($id) {
    	$category = Category::find($id);

    	return view('categories.show', compact('category'));
    }

    public function filterByName ($name) {
    	$category = Category::where('name', $name)->first();

    	return view('categories.show', compact('category'));
    }

    public function filterByX ($name) {
        dd('ok');
        var_dump('ok');die;
    }
}
