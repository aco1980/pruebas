@extends('../layouts/menu')

@section('titulo',"Usuario {$id}")

@section('contenido')

       <h1>Usuario #{{$id}}</h1>
       <h2> Mostrar detalle del usuario  {{$id}}</h2>
       <h2>Fin del listado</h2>

 @endsection
 