<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add post</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
    <div class="container">
        <div class="row row-cols-3" style="padding: 0px;"></div>
        <div style="height: 42px;"></div>
        <h1 class="text-center" style="font-size: 23px;">Add post</h1>
        <div style="height: 42px;"></div>
        <div class="row">
            <div class="col">
                <form method="POST" action="{{url('addnewpost')}}">
                    @csrf
                    <div class="form-group"><input type="text" class="form-control" name="title" placeholder="title" /></div>
                    <div class="form-group"><input type="text" class="form-control form-control-lg" placeholder="content" name="content" /></div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" name="cat">
                        @php    
                            foreach ($categories_raw as $x) {
                                echo "  <option label='$x->title' value='$x->id'></option>";
                            }
                        @endphp
                       
  
                    </select>
                </div>
                    <div class="form-group text-center">
                        <input class="btn btn-primary text-center" type="submit" value="post"></input>
                    </div>
                </form>
            </div>
        </div>
        <div></div>
    </div>


</body>
</html>