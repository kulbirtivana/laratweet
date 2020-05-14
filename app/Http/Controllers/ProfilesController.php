<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tweet;
use App\User;
use App\Profile;
use App\Comment;
USE App\FollowUnfollow;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $profiles = Profile::query()
        ->join( 'users', 'profiles.user_id', '=', 'users.id' )
        ->get();

        $tweets = Tweet::all();

        return view('profiles.index', compact('profiles', 'tweets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if( $user = Auth::user() )
            return view('profiles.create');
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
        if ($user = Auth::user())
        {
            $validatedData = $request->validate(array(
                'username' => 'required|max:25',
                'about_user' => 'max:255'
            ));
            $user = Auth::user();

            $profile = Profile::where("user_id", "=", $user->id)->firstOrFail();


            $profile->user_id = $user->id;
            $profile->username = $validatedData['username'];
            $profile->about_user = $validatedData['about_user'];
            $profile->photo = 'photo';
            $profile->save();

            return redirect('/tweet')->with('success', 'Profile saved');
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
        $profile = Profile::findOrFail($id);

        $tweet = Tweet::findOrFail($id);
        $tweets = Tweet::query()
        ->join('users', 'tweets.user_id', '=', 'users.id')
        ->select( 'tweets.id',
            'users.id as user_id',
            'users.name',
            'tweets.photo',
            'tweets.content',
            'tweets.likes_count')
       ->orderBy('tweets.id', 'desc')
        ->get();
        return view('profiles.show', compact('profile', 'tweet', 'tweets'));
            
       // ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if ($user = Auth::user()){
            $profile = Profile::findOrFail($id);

            return view('profiles.edit', compact('profile'));
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
        if($user = Auth::user()){
            $validatedData = $request->validate(array(
                'username' => 'required|max:25',
                'about_user' => 'max:255',
            ));
            Profile::whereId($id)->update($validatedData);
            return redirect('/tweet')->with('success', 'Profile updated');
        }return redirect('/tweet');
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
        if( $user = Auth::user()){
        $profile = Profile::findOrFail($id);
    
            $profile->delete();
    
            return redirect('/tweet')->with('success', 'Profile deleted.');
        }
        return redirect('/tweet');
    }

    
}
