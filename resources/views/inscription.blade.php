<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
    <title>Inscription</title>
</head>
<body class="indexbody">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 imgcontainer">
                <img  class="container-fluid" src="{{asset('img/apprenant.png')}}">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 register">
                <h4 class="text-center mt-4">Register</h4>
                <form action="{{ Route('create') }}" method="POST" class="form-group">
                @csrf
                  <div class="input-field mt-3">
                      <i class="fa fa-user "></i>
                      <input type="text" name="FullName" placeholder="Full Name">
                  </div>
                  <div class="input-field mt-3 ">
                    <i class="fa fa-envelope "></i>
                    <input type="text" name="email" placeholder="email">
                </div>
                <div class="input-field mt-3">
                    <i class="fa fa-phone "></i>
                    <input type="text" name="phoneNumber" placeholder="phone number">
                </div>
                <div class="input-field mt-3">
                    <i class="fa fa-home "></i>
                    <input type="text" name="classe" placeholder="classe">
                </div>
                <div class="input-field mt-3">
                    <i class="fa fa-bell "></i>
                    <input type="text" name="emergencyNumber" placeholder="Emergency number">
                </div>
                <div class="input-field mt-3">
                    <i class="fa fa-key "></i>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="input-field mt-3">
                    <i class="fa fa-key "></i>
                    <input type="password" placeholder="password_retype">
                </div>
                    <p class="text-center mt-3"><input type="submit" value="register" class="btn submitbtn "></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
