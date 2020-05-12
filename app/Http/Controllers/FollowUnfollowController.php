<?php

namespace App\Http\Controllers;

use App\FollowUnfollow;
use Illuminate\Http\Request;
use Auth;
use App\Tweet;
use App\Profile;
use App\User;
use App\Comment;

class FollowUnfollowController extends Controller
{
    //

    public function followProfile(int $id)
    {
      if ( $user = Auth::user())
      {
        $follower = New FollowUnfollow;
        $follower->user_id = $id;
        $follower->follower_id = $user->id;
        $follower->followed = 1;
        $follower->save();

        return redirect('/tweet')->with('success', 'Started following the user');
    }
    if( ! $user) {
    return redirect('tweet');
        }
    }

    public function UnfollowUser($id)
    {
        if ($user = Auth::user())
        {

            $follower = FollowUnfollow::where('user_id', '=', $id )
            ->where('follower_id', $user->id)
            ->delete();

            return redirect('/tweet')->with('success', 'Unfollow the user');
        }
    }
    public function Following($id)
    {
       if ( $user = Auth::user() ) 
       {
           $following = FollowUnfollow::where('followed', '=', 1);
       }
   }
}