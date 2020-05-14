<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;



class tweet extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    protected $fillable = array(
    	'message',
    	'photo',
    	'likes_count',
        'comments_count',
    	'posted_at'
    );

    public function users()
    {
    	return $this->belongsTo('App\User');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function liked()
    {
      return (bool) Like::where('user_id', Auth::id())
        ->where('tweet_id', $this->id)
        ->first();
    }

    public function likes()
    {
      return $this->hasMany(Like::class, 'tweet_id');
    }
   
}
