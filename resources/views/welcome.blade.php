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
                text-decoration: none;
            }

            #navigation{
                text-align: center;
                background-color: #138BCC;
                text-decoration: none;

            }

            .menu{
                padding:10px;
                color: white;
                text-decoration: none;
                text-align: center;
                font-size: 18px;
            }

            .menu a{
            color: white;
            text-decoration: none;
            padding-right: 15px;

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

            .social{
                padding-bottom: 10px;
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
                text-decoration: none;

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


            @media screen and (max-width: 800px)
            {
                .uses img{
                height:50px;
                width:50px;
            }
            }    

            .footer{
                font-size: 12px;
            }

* {
    margin: 0;
    padding: 0;
}

html, body {
    width: 100%;
    height: 100%;
    background-color: #f8f8f8;
}

#container {
    width: 100vw;
    height: 100vh;
    overflow: hidden;
}

.panel {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    font-size: 60px;
    text-align: center;
    color: #fff;
}

.one {
    background-color: #67D5B5;
}

.two {
    background-color: #EE7785;
}

.three {
    background-color: #C89EC4;
}

.four {
    background-color: #84B1ED;
}

.top {
    height: 500px;
    font-size: 30px;
}
/*html, body {
    height: 100%;
}

.sections {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.section1 {
    position: absolute;
    width: 100%;
    height: 100%;
}
    
.section1.one {
    background-color: #138BCC;
}

.section1.one h4{
    color: white;
    font-size: 18px;
    margin: 0;
    padding: 0;
}
.section1.one img{
    width: auto
    height: 400px;
}

.section1.two {
    background-color: #138BCC;
}

.section1.two h4{
    color: white;
    font-size: 18px;
    margin: 0;
    padding: 0;
}
.section1.two img{
    width: auto;
    height: auto;
}

.section1.three {
    background-color: #138BCC;
}

.section1.three h4{
    color: white;
    font-size: 18px;
    margin: 0;
    padding: 0;
}
.section1.three img{
    width: auto;
    height: auto;
}


.section1.four {
    background-color: green;
}*/

</style>
    </head>
    <body>
                {{--@extends('layouts')--}}

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

        <div>

           <div class="content">

                <div>
                        {{--<div class="title m-b-md">
                            LaraTweet
                        </div>--}}
                    <figure>
                        <img class=".img-responsive" class="container-fluid" class="mainbanner" src="{{ asset('images/LaraTweet-Main-Banner.jpg')}}">
                    </figure>
                </div>               
                <p class="social" >A social networking site where people communicate in short messages called tweets</p>
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

          <!--   <div id="container">
                <section class="panel one">
                    <b>ONE</b>
                </section>
                <section class="panel two">
                    <b>TWO</b>
                </section>
                <section class="panel three">
                    <b>THREE</b>
                </section>
                <section class="panel four">
                    <b>FOUR</b>
                </section>
            </div> -->
               <div id="container">
                <section class="panel one">Reach a large number of people quickly through tweets and retweets<br>
                <img src="images/promote.png" alt="Promotion" title="Promotion of products/services">
                </section>

                    <section class="panel two">Follow the work of others : Build relationships with other followers<br>
                     <img src="images/follow-events.png" alt="Follow the Experts" title="Follow the experts">
                    </section>

                <section class="panel three">
                Seek feedback about your work and give feedback to others<br>
                       <img src="images/feedback.png" alt="Feeddback" title="Feeddback of your work"></section>

                <section class="panel four">Follow and contribute to discussions on events<br>
                     <img src="images/follow-unfollow-a-person.png" alt="Follow unFollow a Person" title="Follow Unfollow a person">
                </section>
            </div>
    </section>

    <section class="use">Why I should use it?
        <p>
            <div class="uses">
                <li>Brand Awareness<br><img src="images/brand-awareness.jpeg" alt="brand awareness" title="brand awareness"> </li>
                <li>Generate leads<br><img src="images/brand-awareness.jpeg" alt="generate leads" title="generate awareness"></li>
                <br>
                <br>
                <p></p>
                <li>Positive opinion<br><img src="images/brand-awareness.jpeg" alt="Positive Opinion" title="Positive Opinion"></li>
                <li>Build community<br><img src="images/brand-awareness.jpeg" alt="Build Community" title="Build Community"></li>
            </div>

             <div><a class="register1" href="{{ route('register') }}">Register Here</a></div>
        </p>
    </section>

    </body>
     <footer class="footer">
                <h3>LaraTweet &copy; Copyright 2020</h3>
            </footer>
</html>
