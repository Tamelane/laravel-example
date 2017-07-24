<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Post extends Model
{
  	protected $fillable=['body','user_id'];
	public function comments()
	{
		return $this->hasMany(Comment::class);//\App\Comment
	}
	public function addComment($body)
	{
		$this->comments()->create(['user_id' => Auth::id(),'body' => $body]);
	}
	   public function username($id)
    {
    	$user = User::find($id);
    	return $user->name;
    }

}
