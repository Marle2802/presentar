@extends('layouts.app')
@section('aside_menu')
@include('layouts.aside')
@endsection
@section('titulo_ventana')

@section('Contenido_app')
<!-- CSS only -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

<link rel="stylesheet" href="style.css">

<body>
<div class="container">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/foto-fondo.jpg" alt="Card image cap">
          <div class="text-center">
            <img src="img/perfil1.jpg" alt="" class="img-fluid yoimagen rounded-circle" height="100px" width="100px">
          </div>
          <div class="card-block">
            <h4 class="card-title text-center">Camilia Lopes</h4>
            <p class="card-text  text-center">Me gusto demasiado el lugar, losigo recomendando a mis amigos.</p>
            <div class="card-footer text-center">
                <button type="button" class="btn btn-outline-dark"><a href="views/recomen-ventana.blade.php"><i class="bi bi-eye"></i></a></button>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-fluid" src="img/foto-fondo.jpg" alt="Card image cap">
          <div class="text-center">
            <img src="img/perfil2.jpg" alt="" class="img-fluid imagen rounded-circle" height="100px" width="100px">
          </div>
          <div class="card-block">
            <h4 class="card-title text-center">Carlos Gomez</h4>
            <p class="card-text text-center">Todo estuvo muy chevere pero me hubiera gustado que hubieran mas servicios.</p>
            <div class="card-footer text-center">
                 <button type="button" class="btn btn-outline-dark"><a href="#"><i class="bi bi-eye"></i></a></button>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-fluid" src="img/foto-fondo.jpg" alt="Card image cap">
          <div class="text-center">
            <img src="img/perfil3.jpg" alt="" class="img-fluid yoimagen rounded-circle" height="100px" width="100px">
          </div>
          <div class="card-block">
            <h4 class="card-title text-center">Lusa Mosquera</h4>
            <p class="card-text text-center">Ame ellugar espero volver pronto con muchos de mis amigos.</p>
            <div class="card-footer text-center">
                 <button type="button" class="btn btn-outline-dark"><a href="#"><i class="bi bi-eye"></i></a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
<body> 
@endsection