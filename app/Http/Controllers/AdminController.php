<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Category;
use \App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\UploadedFile;
class AdminController extends Controller
{
    public function addCategory()
    {
    	$categories=Category::all();
    	return view('Admin.add',compact('categories'));
    }  
    public function deleteCategory(Request $request)
    {
        //dd(request('category'));
       //dd(Category::where('id',25)->get());
        //dd(Category::where('id', $request->id)->get()); 
        //DB::table('category')->where('name', $request->category)->delete();
        Category::where('id', request('category'))->delete();

        return redirect('/');
    }

     public function storeCategory()
    {
    	$this->validate(request(),[
    		'name'=>'required|min:1'
    		]);
		$category=new Category;
    	$category->name=request('name');
    	$category->save();
    	Session::flash('CategoryAdded','Category "'.$category->name.'" '.'Added');
    	/*$data = $request->session()->all();
    	$request->session()->flash('status', 'Task was successful!');*/
    	return redirect('/');
    }
    public function storeProduct(Request $request)
    {
    	$this->validate(request(),[
    		'name'=>'required|min:1',
    		'price'=>['required','numeric'],
    		'category'=>'required'


    		]);
		$product=new Product;
    //   $file = request(file('image'));
    	$product->name=request('name');
    	$product->price=request('price');
    	$product->category_id=request('category');
		//$product->picture=request('image');
        ///$path = $request->image->path();
       // $path = $request->image->store('images');
       // dd((request(file('image'))));
      // dd(request(Input::file('image')));
		//$product->picture=Input::file('image');
        $product->picture=$request->image;
        //$product->$file=getClientOriginalName();
    	$product->save();
    	Session::flash('ProductAdded','Product "'.$product->name.'" '.'Added');
    	//pathinfo(Input::file('upfile')->getClientOriginalName(), PATHINFO_FILENAME);
    	/*$data = $request->session()->all();
    	$request->session()->flash('status', 'Task was successful!');*/
    	return redirect('/');
    }
}
