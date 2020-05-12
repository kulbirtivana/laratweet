<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tweet;
use App\Profile;
use App\User;
use App\Comment;
use App\FollowUnfollow; 


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //    $tweets = tweet::query()
        // ->join('users', 'tweets.profile_id', '=', 'users.id')->get()->simplePaginate(15);

        $tweets = Tweet::paginate(10);
        return view('tweet.index', compact('tweets'));

        // if( $user = Auth::user() )
        // {
        //     $profile = profile::findOrFail();

        //    $follower = FollowUnfollow::where("profile_id", "=", $profile->id)->find('followed');

        //     $tweets = tweet::query( )
        //     ->join( 'profiles', 'tweets.profile_id', '=', 'profiles.id' )
        //     ->select( 'tweets.id',
        //     'profiles.id as profile_ID',
        //     'profiles.name',
        //     'profiles.about_user',
        //     'profiles.photo',
        //     'tweets.posted_at',
        //     'tweets.message',
        //     'tweets.photo',
        //     'tweets.likes_count' )
        //     ->orderBy('posts.id', 'desc')
        //     ->get(); 
            
        //     $post = tweet::where("profile_id", "=", $profile->id)->first();   

        // return view('tweet.index', compact('tweets', 'profile')  );

        // }  else 
        //     $tweets = tweet::query( )
        //         ->join( 'profiles', 'tweets.profile_id', '=', 'profiles.id' )
        //         ->get(); 

        //     return view('tweet.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        //
        $user = Auth::user();
        if($user)
            return view('tweet.create');
        else
            return redirect('/tweet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if( $user = Auth::user())
        {
        $validatedData = $request->validate(array(
            'message' => 'required|max:255'
        ));
        $profile = Profile::where("user_id", "=", $user->id)->firstOrFail();
        $tweet = new tweet;
        $tweet->usere_id = $user->id;
        $tweet->message = $validatedData['message'];
        $tweet->save();  
        return redirect('/tweet')->with('success', 'Tweet saved');
    }
    return redirect('/tweet');
}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tweet = Tweet::findOrFail($id);

        $comment = new Comment();

        $user = User::findOrFail($tweet->user_id);

        $profile = Profile::where("user_id", "=", "$user->id")->firstOrFail();
        return view('tweet.show', compact('tweet', 'comment', 'profile', 'user'));
    }

         //* Show the form for editing the specified resource.
     //*
     //@param  int  $id
     //* @return \Illuminate\Http\Response
     //*/
    public function edit($id)
    {
        //
        if($user = Auth::user()){
            $tweet = Tweet::findOrFail($id);
            return view('tweet.edit',compact('tweet'));
        }
        return redirect('/tweet');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tweet = Tweet::findOrFail($id);

        if( $user = Auth::user()){
        $validatedData = $request->validate(array(
            'message' => 'required|max:255',
        ));

        tweet::whereId($id)->update($validatedData);

        // if ( isset ( $request->is_gif) && ( $request->is_gif === 'true' )) {
        //     $tweet->is_gif = TRUE;
        // }
        // else
        // $tweet->is_gif = FALSE;

        // $tweet->save(); 
        
        return redirect('/tweet')->with('success', 'Tweet Updated');
    }
    return redirect('tweet');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if($user = Auth::user()){
            $tweet = Tweet::findOrFail($id);
            $tweet->delete();
            return redirect('/tweet')->with('success', 'Tweet deleted');
        }
        return redirect('/tweet');
    }

    public function getlike(Request $request)
    {
        $tweet = Tweet::find($request->tweet);
        return response()->json([
            'tweet' => $tweet,
        ]);
    }

    public function like(Request $request)
    {
        $tweet = Tweet::find($request->tweet);
        $value = $tweet->like;
        $tweet->like = $value + 1;
        $tweet->save();
        return response()->json([
            'message' => 'Thanks',
        ]);
    }
}
