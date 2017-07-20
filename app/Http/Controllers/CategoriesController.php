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
}
