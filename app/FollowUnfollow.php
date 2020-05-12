<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowUnfollow extends Model
{
    //
    protected $fillable = ['user_id', 'follower_id', 'followed'];

    protected $primarykey = 'user_id';

    public function profiles()
    {
    	return $this->belongsTo(User::class);
    }
}
