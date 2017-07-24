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
    		'body'=>'required|min:3',
            'user_id'=> auth()->check() ? '' : 'required'
    		]);
    	$post=new Post;
    	$post->title=request('title');
    	$post->body=request('body');
        $post->user_id=Auth::id();
    	$post->save();
    	return redirect('/posts/all');
    }
    public function show(Post $post)
    {
    	return view('posts.show',compact('post'));
    }
}
