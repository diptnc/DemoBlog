<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand" href="index.html">Demo blog</a>
                <div
                    class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">About us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('login')}}">Admin</a></li>
                    </ul>
            </div>
            </div>
        </nav>
        <header class="masthead" style="background:orange;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <div class="site-heading">
                            <h1>Clean Blog</h1><span class="subheading">A Blog Theme by Start Bootstrap</span></div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container" style="color: #212121;!important">
            <div class="row">
                <div class="col-md-10 col-lg-8">
<?php
foreach ($post_raw as $p) {
    if($p->cat_id==1){
  $category="technology";
    }
    if($p->cat_id==2){
  $category="sports";
    }

?>
                    <div class="post-preview">
                        <a href={{url("post/$p->id")}}>
                            <h2 class="post-title">{{$p->title}}</h2>
                            <h3 class="post-subtitle">{{$p->Description}}</h3>
                            <h4 class="post-subtitle">{{$category}}</h4>
                        </a>
                        <p class="post-meta">Posted by  <a href="#"> admin on xx/xx/xx</a></p>
                    </div>
                 
                   
                    <hr />
<?php

                }
?>
                    <hr />
                    <div class="clearfix"><button class="btn btn-primary float-right" type="button">Older Posts ⇒</button></div>
                </div>
            </div>
            

           
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                            <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                            <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                        </ul>
                        <p class="text-muted copyright">Copyright © Brand 2021</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>



</html>
