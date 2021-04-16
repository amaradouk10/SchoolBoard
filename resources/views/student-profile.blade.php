
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/directeur-dashbord.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-lg-3 navmatiere">
                <h3 class="text-light text-center">ELEVE</h3>
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href=""><i class="far fa-user-circle"></i><span>voir mes notes</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="bulletin"><i class="far fa-user-circle"></i><span>Generer un bulletin</span></a></li>
                        <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-user-circle"></i><span>Log out</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="card mt-4 offset-2">
                    <h3 class="text-dark mt-4 text-center">Profile</h3>
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="" width="160" height="160">
                        <form action="{{Route('imageUpload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" id="file" class="form-control btn"/>
                        <button type="submit" class="btn btn-success mt-4">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 card mt-4 offset-1">
                <H4 class="text-dark mt-4 text-center bg-primary ">Mes notes</H4>
                @foreach ($note as $not)
                    <h5 class="mt-2">{{$not->matiereName}} : {{ $not->noteValue}}</h5>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
