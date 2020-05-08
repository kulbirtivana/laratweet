<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraTweet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('js/app.js')}}" type="text/javascript" defer></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #138BCC;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                background-color: #E0ECF4;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color:#138BCC;
                text-align: center;

            }
              .features, .use {
                font-size: 28px;
                text-align: center;
                font-style: bold;
                background-color: #138BCC;
                padding: 15px;
                color:white;

            }

            .benefits{
                font-size: 28px;
                text-align: center;
                font-style: bold;
                background-color: #E0ECF4;
                padding: 15px;

            }

            .uses{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                list-style: none;
                font-size: 17px;

            }
            .uses li{
                width:25%;
            }

            .uses img{
                height:100px;
                width:100px;
            }

            .register{
                background-color: #138BCC;
                color:white;
                padding: 10px;
                font-size: 18px;
                background-color: #138BCC;
            }

            .register1{
                background-color: white;
                color:138BCC;
                padding: 10px;
                font-size: 18px;
            }
            .featuresall{
                
                font-size: 18px;
                text-align: center;
                font-style: bold;
                text-align: center;

            }


            .feature1{
                width:33.333%;
                padding:10px;
                font-size: 16px;
                text-align: center;


            }

            .feature1 img{
                height: 300px;
                width: 300px;
                margin-right: auto;
                margin-left: auto;
            }
          

            
            #pinContainer {
            width: 100%;
            height: 100%;
            overflow: hidden;
            -webkit-perspective: 1000;
                    perspective: 1000;
            }
            #slideContainer {
                width: 400%; /* to contain 4 panels, each with 100% of window width */
                height: 100%;
            }
            .panel {
                height: 100%;
                width: 25%; /* relative to parent -> 25% of 400% = 100% of window width */
                float: left;
            }
        </style>
    </head>
    <body>
       {{--@extends('layouts.app')--}}
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div>
                        <div class="title m-b-md">
                            LaraTweet
                        </div>
                    <figure>
                        <img class=".img-responsive" class="rounded mx-auto d-block" src="{{ asset('images/logo.png')}}">
                    </figure>
                </div>

               
                <p><strong>A social networking site where people communicate in short messages called tweets</strong>
                    <div><a class="register" href="{{ route('register') }}">Register Here</a></div>
                </p>        
                </div>
            </div>
        </div>

  <section class="features"><h2>Features</h2>
          <section>
            <div>
              <h3 class="featuresall">Tweets</h3>
                <p class="feature1">Make a Post : Share what's on your mind?<img src="images/create-a-post.jpeg"></p>
            </div>
            <div>
              <h3 class="featuresall">Images</h3>
                <p class="feature1">Add Images/GIFs to the tweets<img src="https://media0.giphy.com/media/5wWf7HapUvpOumiXZRK/giphy.gif?cid=ecf05e47d1ae020359f4c11c55704e319482e219650e2802&rid=giphy.gif"> </p>
            </div>
            <div>
              <h3 class="featuresall">Comments</h3>
                <p class="feature1">Add Comments to the tweets<br><img src="images/add-comments-to-your-tweets.jpeg"></p>
            </div>
            <div>
              <h3 class="featuresall">Like/UnLike</h3>
                <p class="feature1">You can like or unlike the tweet<br><img src="images/like-unlike-the-tweet.jpeg"></p>
            </div>
            <div>
              <h3 class="featuresall">Follow/Unfollow</h3>
                <p class="feature1">You can follow/unfollow a Person<br><img src="images/follow-unfollow-a-person.jpeg"></p>
            </div>
             
          </section>
</section>



    <section class="benefits">Benefits
        <div id="pinContainer">
<!--             <div id="slideContainer">
 -->                <section class="panel blue">
                    <b>ONE</b>
                </section>
                <section class="panel turqoise">
                    <b>TWO</b>
                </section>
                <section class="panel green">
                    <b>THREE</b>
                </section>
                <section class="panel bordeaux">
                    <b>FOUR</b>
                </section>
<!--             </div>
 -->        </div>
    </section>

    <section class="use">Why I should use it?

        <p>
            <div class="uses">
                <li>Brand Awareness<br><img src="images/brand-awareness.jpeg"></li>
                <li>Generate leads<br><img src="images/brand-awareness.jpeg"></li>
                <br>
                <br>
                <p></p>
                <li>Create a positive opinion<br><img src="images/brand-awareness.jpeg"></li>
                <li>Build community<br><img src="images/brand-awareness.jpeg"></li>
            </div>

             <div><a class="register1" href="{{ route('register') }}">Register Here</a></div>
        </p>
    </section>



    </body>
</html>
