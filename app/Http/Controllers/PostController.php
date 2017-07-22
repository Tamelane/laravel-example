<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
class PostController extends Controller
{
    public function index(Post $id)
    {
    	return $id;
    }
     public function create()
    {
    return view('posts.create');

    }
     public function store()
    {
    	$this->validate(request(),[
    		'title'=>'required|min:2',
    		'body'=>'required|min:3'
    		]);
    	$post=new Post;
    	$post->title=request('title');
    	$post->body=request('body');
    	/*Post::create([
    		'title'=>request('title'),
			'body'=>request('body')
    		]);*/
    	//dd(request('title'));
    	$post->save();
    	return redirect('/');

    }
    

}
