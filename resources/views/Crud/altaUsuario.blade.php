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
    @section('title')

        @stop
</head>
<body>
        @if(isset($user) and is_object($user))
            @php
            $title='Modificación del poeta';
            $boton ='Actualizar';
            $id = $user-> poet_code;
            $first = $user-> first_name;
            $surname= $user-> surname;
            $adress = $user->adress;
            $postcode = $user-> postcode;
            $telephone = $user->telephone_number;
            @endphp
        @else
            @php
            $title= 'Alta de poeta';
            $boton=  'Dar de alta';
            $first='';
            $surname='';
            $adress ='';
            $postcode ='';
            $telephone ='';

            @endphp
        @endif


<div class="container h-80">
    <div class="row align-items-center h-100">
        <div class="col-3 mx-auto">
            <div class="text-center">


                <form action="{{isset($user)? action('Crud@update'):action('Crud@store')}}" method="post">
                    {{csrf_field()}}
                    @if(isset($user) and is_object($user))
                        <input type="hidden" name="id" value="{{$id}}">
                    @endif

                    <input type="text" name="first" id="inputUser" class="form-control form-group" placeholder="Nombre" required autofocus value="{{$first}}">
                    <br>
                    <input type="text" name="surname" id="inputUser" class="form-control form-group" placeholder="Apellido" required autofocus value="{{$surname}}">
                    <br>
                    <input type="text" name="adress" id="inputUser" class="form-control form-group" placeholder="Dirección" required autofocus value="{{$adress}}">
                    <br>
                    <input type="text" name="postcode" id="inputUser" class="form-control form-group" placeholder="CodPostal" required autofocus value="{{$postcode}}">
                    <br>
                    <input type="text" name="telephone" id="inputUser" class="form-control form-group" placeholder="telefono" required autofocus value="{{$telephone}}">
                    <br>
                    <input  class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  value="{{$boton}}">
                </form><!-- /form -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


