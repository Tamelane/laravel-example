<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable=['body','user_id'];
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
    public function users() {
    	return $this->belongsTo(User::class);
    }
    public function username($id)
    {
    	$user = User::find($id);
    	return $user->name;
    }
}
