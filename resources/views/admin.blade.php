<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <title>admin panel</title>
</head>
<body>
    <div class="container">


            <div class="row row-cols-3" style="padding: 0px;">
                <div class="col" style="background-color: #ffcd6c;padding: 21px;">
                    <div class="row d-md-flex align-items-md-center">
                        <div class="col">
                            <h1 class="text-left" style="font-size: 28px;">Category</h1>
                        </div>
                        <div class="col-md-4">
                            <h1 style="font-size: 24px;background-color: #ff0000;color: rgb(255,255,255);"> {{$categories_raw}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col" style="background-color: #fce4b4;padding: 21px;">
                    <div class="row d-md-flex align-items-md-center">
                        <div class="col">
                            <h1 class="text-left" style="font-size: 28px;">Posts</h1>
                        </div>
                        <div class="col-md-4">
                            <h1 style="font-size: 24px;background-color: #ff0000;color: rgb(255,255,255);">{{$posts_raw}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col" style="background-color: #7090ff;padding: 21px;">
                    <h1 style="font-size: 28px;">NUll</h1>
                </div>
            </div>
            <div style="height: 42px;"></div>
            <h1 class="text-center" style="font-size: 19px;">Basic functionalities(admin)</h1>
            <div style="height: 42px;"></div>
            <div class="row">
                <div class="col text-center"><a href="{{url('postnew')}}" class="btn btn-primary" type="button" style="background-color: rgb(252,228,180);color: rgb(41,41,41);padding: 20px;">Add post</a></div>
            </div>
   

    </div>
</body>
</html>