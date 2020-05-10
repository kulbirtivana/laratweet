<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraTweet : A Twitter like App using Laravel, Vue</title>
        <meta name="description" content="LaraTweet : A social networking site where people communicate in short messages called tweets">
         <link rel="shortcut icon" type="image/png" href="{{URL('images/LaraTweet-Logo.png')}}">
        <meta name=”robots” content="index, follow">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
            <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
            <script src="{{asset('js/app.js')}}" type="text/javascript" defer></script> 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: ;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            #logo{
                height: auto;
                display: block;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-left: auto;
                margin-right: auto;

            }

            #logo img{
                    display: block;
                    margin-left: auto;
                    margin-right: auto;

            }

            .laratext{
                text-align: center;
                font-family: Helvetica Neue,Helvetica,Arial,sans-serif, bold; 

            }

            #navigation{
                text-align: center;
                background-color: #138BCC;
            }

            .menu{
                padding:10px;
                color: white;
                text-decoration: none;
                text-align: center;
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


            .mainbanner{
                width:100%;
                height:600px;
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
                text-decoration: none;

            }
            .featuresall{
                
                font-size: 18px;
                text-align: center;
                font-style: bold;
                text-align: center;

            }


            .feature1{
                width:100%;
                padding:10px;
                font-size: 16px;
                text-align: center;


            }
            .feature1 img{
                height: 350px;
                width: 600px;
                margin-right: auto;
                margin-left: auto;
            }


            @media screen and (max-width: 600px)
            {
                .uses img{
                height:50px;
                width:50px;
            }
            }

            #pinContainer {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
/*            -webkit-perspective: 1000;
*//*            perspective: 1000;
*/            }
            #slideContainer {
                width: 400%; /* to contain 4 panels, each with 100% of window width */
                height: 100%;
            }
            .panel {
                height: 100%;
                width: 100%; /* relative to parent -> 25% of 400% = 100% of window width */
                position: absolute;
/*                float: left;
*/            }

            .footer{
                text-align: center;
                padding:10px;
                font-size: 12px;
            }


</style>
    </head>
    <body>
                {{--@extends('layouts.app')--}}

            <div>
                       
                    <figure id="logo">
                        <img src="{{ asset('images/LaraTweet-Logo.png')}}" title="LaraTweet Logo" alt="LaraTweet"><br><div class="laratext">LaraTweet- A Social Networking App</div>
                    </figure>
              
                    <nav id="navigation" class="menu">
                               
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/tweet') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </nav>
            </div>

        <div class="">

           <div class="content">

                <div>
                        {{--<div class="title m-b-md">
                            LaraTweet
                        </div>--}}
                    <figure>
                        <img class=".img-responsive" class="container-fluid" class="mainbanner" src="{{ asset('images/LaraTweet-Main-Banner.jpg')}}">
                    </figure>
                </div>               
                <p>A social networking site where people communicate in short messages called tweets</p>
                    <div><a class="register" href="{{ route('register') }}">Register Here</a></div><br>
        </div>
                    
                </div>
    
  <section class="features"><h2>Features</h2>
          <section>
            <div>
              <h3 class="featuresall">Tweets</h3>
                <p class="feature1">Make a Post : Share what's on your mind?<br><img src="images/create-a-post.jpeg"></p>
            </div>
            <div>
              <h3 class="featuresall">Images</h3>
                <p class="feature1">Add Images/GIFs to the tweets<br><img src="https://media0.giphy.com/media/5wWf7HapUvpOumiXZRK/giphy.gif?cid=ecf05e47d1ae020359f4c11c55704e319482e219650e2802&rid=giphy.gif"> </p>
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
 -->                <section class="panel">
                    <b>ONE</b>
                    <img src="images/promote.png" alt="Promotion" title="Promotion of products/services">
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
     <footer class="footer">
                <h3>LaraTweet &copy; Copyright 2020</h3>
            </footer>
</html>
