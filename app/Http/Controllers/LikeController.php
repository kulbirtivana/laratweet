<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use App\Tweet;
use App\User;

class LikeController extends Controller
{
    //
    // public function Like ( $id )
    // {
    //     $tweet = Tweet::findOrFail( $id );
    //     $tweet->save();
    //     return $tweet;
    // }

    // public function unlike ( $id )
    // {
    //     $tweet = Tweet::findOrFail( $id );
    //     $tweet->save();
    //     return $tweet;
    // }

    // public function toggleLike($Request, $id)
    // {
    //     $action = $request->get('action');
    //     switch( $action ){
    //         case 'Like':
    //         Tweet::where('id', $id)->increment('likes_count');
    //         break;
    //         case 'Unlike':
    //         Tweet::where('id', $id)->decrement('likes_count');
    //         break;
    //     }
    //     return '';
    // }
}
