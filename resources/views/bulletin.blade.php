<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulletin.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
    <title>Bulletin.com</title>
</head>
<body>
    <head>
        <title> Student Report Card </title>
        <h2  class="text-center mt-5">Student Bulletin</h2>
      </head>
      <body>
        <table class="mt-4">
          <thead>
            <tr>
              <td colspan="2">Course </td>
              <td rowspan="2"> Coefficient </td>
              <td colspan="2"> Note1</td>
              <td colspan="2"> Note2</td>
              <td colspan="4"> Point </td>
            </tr>
          </thead>
          <tbody>
            @php($compte=0)
            @foreach ($matiere as $mat)
            <tr>
            <td colspan="2">{{$mat->matiereName}}</td>

            @foreach ($note as $not)
                @if ($mat->id==$not->matiere_id)
                <td colspan="2">{{$mat->coefficient}}</td>
                <td colspan="2">{{$not->noteValue1}}</td>
                <td colspan="2">{{$not->noteValue2}}</td>
                <td colspan="2" >{{$totalnote[$compte]}}</td>
                @php($compte++)
                @endif
            @endforeach
            </tr>
            @endforeach
            <tr>
              <td colspan="8" rowspan="1" class="footer">Total</td>
              <td colspan="2">{{$sommetotal}}</td>
            </tr>
            <tr>
              <td colspan="9"  class="footer">Moyenne</td>
              <td> {{$moyenne}}/20</td>
            </tr>
        </table>
        {{-- <form method="POST" action="{{ route('export') }}" >
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Nom de fichier" >
            <button type="submit" >Exporter</button>
        </form> --}}
      </body>
</body>
</html>
