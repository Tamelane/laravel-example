<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Category;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function addProduct()
    {
    	return view('Admin.add');
    }
     public function storeCategory()
    {
    	$this->validate(request(),[
    		'name'=>'required|min:1'
    		]);
		$category=new Category;
    	$category->name=request('name');
    	$category->save();
    	Session::flash('CategoryAdded','CategoryAdded');
    	/*$data = $request->session()->all();
    	$request->session()->flash('status', 'Task was successful!');*/
    	return redirect('/');
    }
}
