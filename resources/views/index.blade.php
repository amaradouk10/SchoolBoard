<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">

    <title>index</title>
</head>
<body class="indexbody">
    <div class="container">
        <p class="text-center">
            <img  src="{{asset('img/logo.png')}}" alt="">
            <h1 class="text-center ">VigiSchool</h1>
        </p>
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 bloc ">
                <img  src="{{asset('img/connect.png')}}" class="connectimg">
                <h4 class="text-center mt-3">Have an account?</br> Sign in here</h4>
                <p class="text-center mt-4"><a href="connexion" class="btn btn1">sign in</a></p>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 bloc">
                <img  src="{{asset('img/register.png')}}" class="registerimg">
                <h4 class="text-center mt-3">Dont Have an account?</br> register here</h4>
                <p class="text-center mt-4"><a href="inscription" class="btn btn2">Register</a></p>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center p-4"><h3>@VigiScchool copyright 2021</h3></div>
    </footer>
</body>
</html>

