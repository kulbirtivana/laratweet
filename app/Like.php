<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
        protected $fillable = ['likes_id', 'likeable_type', 'user_id']; 

        public function users()
        {
        	return $this->belongsTo(User::class);
        }


        protected $table = 'likes';

        public function tweets()
        {
        	return $this->morphedByMany('App\Tweet', 'likes');
        }

        public function comments()
        {
        	return $this->belongsTo('App\Like');
        }
}
