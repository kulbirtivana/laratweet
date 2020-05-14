<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class profile extends Model
{
    //
    //use CanComment;

    public $timestamps = false;

    public function user(){
    	return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'username', 'user_id', 'about_user', 'photo'];
}
