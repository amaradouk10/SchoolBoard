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
                <div class="col-xs-1 col-sm-2 col-lg-3 navmatiere">
                    <h3 class="text-light text-center">Directeur</h3>
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="nav-item text-light"><a class="nav-link active" href="dashbord"><i class="fas fa-plus-circle"></i><span>Ajouter un professeur</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="student"><i class="fas fa-user-circle"></i><span>Ajoutez un élève</span></a></li>
                            <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-table"></i><span>Ajoutez une note</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="matiere"><i class="far fa-user-circle"></i><span>Ajoutez une matière</span></a></li>
                            <li class="nav-item"><a class="nav-link" href=""><i class="far fa-user-circle"></i><span>Generer un bulletin</span></a></li>
                            <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-user-circle"></i><span>Log out</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-1 col-sm-2 col-lg-3 bg-primary notediv">
                    <h1 ><a href="note" class="classetitre text-center m-4">6ème</a></h1>
                </div>
                <div class="col-xs-1 col-sm-2 col-lg-3 bg-primary notediv">
                    <h1 ><a href="note" class="classetitre text-center m-4">5ème</a></h1>
                </div>
                <div class="col-xs-1 col-sm-2 col-lg-3 bg-primary notediv">
                    <h1 ><a href="note" class="classetitre text-center m-4">4ème</a></h1>
                </div>
            </div>
    </div>
</body>
</html>
