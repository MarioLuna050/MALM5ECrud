<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Mostrar usuarios</h1>
<img src="user.png" alt="usuario" width="50px">
<a href="{{action('Crud@create')}}">Nuevo poeta</a>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">poet_code</th>
        <th scope="col">first_name</th>
        <th scope="col">surname</th>
        <th scope="col">adress</th>
        <th scope="col">postcode</th>
        <th scope="col">telephone_number</th>
        <th scope="col">Actualizar</th>
        <th scope="col">Borrar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($poet as $user)
    <tr>
        <td>{{$user->poet_code}}</td>
        <td>{{$user->first_name}}</td>
        <td>{{$user->surname}}</td>
        <td>{{$user->adress}}</td>
        <td>{{$user->postcode}}</td>
        <td>{{$user->telephone_number}}</td>
        <td><a href="{{action('Crud@show',['id'=>$user-> poet_code])}}">Actualizar</a></td>
        <td><a href="{{action('Crud@destroy',['id'=>$user-> poet_code])}}">Borrar</a></td>
    </tr>
    @endforeach

    </tbody>
    @if((session('status')))
    <div class="alert alert-light" role="alert">
        {{session('status')}}    </div>
    @endif
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


