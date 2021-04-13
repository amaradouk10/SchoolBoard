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
                <div class="col-xs-8 col-sm-8 col-lg-8 m-5">
                    <form action="{{ Route('addNote') }}" method="post">
                    @csrf
                    <table class="table table-borderless table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Matricule</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Matière</th>
                            <th scope="col">Mark</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($utilisateurs as $us)
                            <tr>
                                <td scope="row">{{ $us->id}}</th>
                                    <input type="hidden" name="utilisateur_id" value="{{$us->id}}">
                                <td>{{ $us->FullName}}</td>
                                <td>
                                    <select type='integer' name='matiere_id' class="form-control selectmatiere">
                                        @foreach($matiere as $mat)
                                            <option  value="{{ $mat->id }}">{{ $mat->matiereName }}</option>
                                         @endforeach
                                    </select>
                                </td>
                                <td><input type="integer" name="noteValue" placeholder=" entrez une note" class="m-2"></td>
                                <td  class="d-flex">
                                    <button type="submit" class="btn btn-primary m-1">valider</button>
                                    <a href=""  class="btn btn-danger m-1">Update</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>
