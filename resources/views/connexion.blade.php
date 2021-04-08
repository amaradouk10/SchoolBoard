<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
    <title>Connexion</title>
</head>
<body class="indexbody">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 imgcontainer">
                <img  class="container-fluid" src="{{asset('img/apprenant.png')}}">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 login">
                <h4 class="text-center mt-4 fw-3">log in</h4>
                <form action="{{ Route('connexion') }}" method="POST" class="form-group">
                @csrf
                <div class="input-field mt-5">
                    <i class="fa fa-envelope "></i>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input-field mt-5">
                    <i class="fa fa-key "></i>
                    <input type="password" name="password" placeholder="password">
                </div>
                    <p class="text-center mt-5"><input type="submit" value="register" class="btn submitbtn "></p>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center p-4"><h3>@VigiScchool copyright 2021</h3></div>
    </footer>
</body>
</html>
