<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
class CommentsController extends Controller
{
    public function store(Post $post) 
    {	
    /*Comment::create([
    		'body'=>request('body'),
    		'post_id'=>$post->id
    		]);
            'name'      => auth()->check() ? 'required' : ''*/
        $this->validate(request(),['body'=>'required|min:2','user_id'=> auth()->check() ? '' : 'required']);
        $post->addComment(request('body'));
    	/*$comment=new Comment;
    	$comment->post_id=$post->id;
    	$comment->body=request('body');
    	$comment->save();*/
    	return back();

    }
}