<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Category;
use \App\Product;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\UploadedFile;
class AdminController extends Controller
{
    public function showPanel()
    {
       /* $categories=Category::all() ;
        foreach ( Category::all() as $category) {
            $categories[$category->id]=$categories->name;
        }*/
       /* dd(Category::all() );*/
       $items = array();
        foreach (Category::all() as $key => $value) {
        // echo .$key.'<br>';  
         $items[$value->id]=$value->name;
        }
       // dd($items);
      // $items = Category::all(['id', 'name']);
         //dd($items);
        $products=Product::all();
    	$categories=Category::all();
    	return view('admin.add',compact('categories','products','items'));
    }  
    public function deleteCategory(Request $request)
    {
        $flash=Category::find(request('category'));
        Category::where('id', request('category'))->delete();
        Session::flash('text','Category "'.$flash->name.'" '.'Deleted');
        return redirect('/admin/show/');
    }

     public function storeCategory()
    {
    	$this->validate(request(),[
    		'name'=>'required|min:1'
    		]);
		$category=new Category;
    	$category->name=request('name');
    	$category->save();
    	Session::flash('text','Category "'.$category->name.'" '.'Added');
    	return redirect('/admin/show/');
    }
    public function storeProduct(Request $request)
    {
    	$this->validate(request(),[
    		'name'=>'required|min:1',
    		'price'=>['required','numeric'],
    		'category'=>'required'
    		]);
		$product=new Product;
    	$product->name=request('name');
    	$product->price=request('price');
    	$product->category_id=request('category');
        $product->picture=$request->image;
    	if ($product->picture==NULL) {
            $product->picture='images/default.png';}
        else
        {
/*
        $filename = Input::file('image');
        $change = $filename->getClientOriginalExtension();

        $newfilename = Auth::id().str_random(10).'.';
        $filename->move('images', "{$newfilename}" .$change);  
        $imageName = "{$newfilename}" .$change;
        //$image->caption = Input::get('caption');
        //$image->user_id = Auth::id();
        //$image->user_name = Auth::user()->name;
       // $image->save();
          $request->file('image')->move(base_path() . '/public/images/', $imageName);*/
        }
        $product->save();
    	Session::flash('text','Product "'.$product->name.'" '.'Added');
    	return redirect('/admin/show/');
    }
    public function deleteProduct(Request $request)
    {  
        $flash=Product::find(request('id'));
        Product::where('id', request('id'))->delete();
        Session::flash('text','Product "'.$flash->name.'" '.'Deleted');
        return redirect('/admin/show/');
    }
}
