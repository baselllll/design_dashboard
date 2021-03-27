<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard OPen the Door</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/light-box.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-main.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-lg-4">
            <img class="mt-4" src="{{asset('images/second_service.jpg')}}" alt="" width="100%" height="60%">
        </div>
        <div class="col-lg-7" style="margin-left: 60px">
            <form action="{{url('/dashboard/login')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Enter password" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="text-center btn btn-primary text-capitalize font-size-4"><i class="fa fa-plus"></i> Login</button>
                </div>
            </form>z

        </div>
    </div>

</div>
</body>
</html>
