<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/directeur-dashbord.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
    <title>Directeur-dashbord</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3 dashbordnavbar">
                <h3 class="text-light text-center">Directeur</h3>
               <nav>
                <ul class="nav navbar-nav">
                    <li class="nav-item text-light"><a class="nav-link active" href="dashbord"><i class="fas fa-plus-circle"></i><span>Ajouter un professeur</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="student"><i class="fas fa-user"></i><span>Ajoutez un élève</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-table"></i><span>Ajoutez une note</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="matiere"><i class="far fa-user-circle"></i><span>Ajoutez une matière</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="bulletin"><i class="far fa-user-circle"></i><span>Generer un bulletin</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-user-circle"></i><span>Log out</span></a></li>
                </ul>
               </nav>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 mt-5">
                <h3 class="text-center table-prof">Ajout de Professeurs</h3>
                <form action="{{ Route('create') }}" method="POST" class="form-group register">
                    @csrf
                      <div class="input-field">
                          <i class="fa fa-user "></i>
                          <input type="text" name="FullName" placeholder="FullName">
                      </div>
                      <div class="input-field">
                        <i class="fa fa-phone "></i>
                        <input type="text" name="phoneNumber" placeholder="phoneNumber">
                    </div>
                      <div class="input-field mt-3 ">
                        <i class="fa fa-envelope "></i>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="input-field mt-3">
                        <i class="fa fa-list-alt"></i>
                        <input type="text" name="role" placeholder="role">
                    </div>
                    <div class="input-field mt-3">
                        <i class="fa fa-home"></i>
                        <input type="text" name="classe" placeholder="Prof principal de quelle classe?">
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
            <div class="col-lg-4  col-md-5 col-sm-5">
                <H3 class="table-prof text-center mt-5">Liste des professeurs</H3>
                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <td scope="col">FullName</td>
                            <td scope="col">Prof principal</td>
                            <td scope="col">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($utilisateurs as $us)
                            <tr>
                                <td>{{ $us->FullName}}</td>
                                <td>{{ $us->classe}}</td>
                                <td><a href="deleteprof/{{ $us->id }}" class="btn btn-danger m-1">Supprimer</a></td>
                            </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</body>
</html>
