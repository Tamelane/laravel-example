<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use Auth;
class PostController extends Controller
{
    public function index()
    {
    	$posts=Post::latest()->get();

    	return view('posts.posts',compact('posts'));
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
        $post->user_id=Auth::id();
    	/*Post::create([
    		'title'=>request('title'),
			'body'=>request('body')
    		]);*/
    	//dd(request('title'));
    	$post->save();
    	return redirect('/');
    }
    public function show(Post $post)
    {
        //dd($post);
    	return view('posts.show',compact('post'));
    }
}
