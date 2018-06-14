@extends('../layouts/menu')


@section('titulo')
        Nuevo usuario
@endsection

@section('contenido')
    
    <h2>Nuevo Usuario:</h2>
    <br>
<form action="{{ url('/guardaruser') }}" method="POST">
              {{ csrf_field() }}
            <labe>Usuario</label>
            <input type="text" name="nombre">
            <button type="submit">Guardar</button>    
</form>

@endsection

@section('sidebar')
{{-- parent agregar el section definida en el loyou, si no lo coloco no lo pone --}}
 @parent
{{-- Le agrego contedido a la barra del loyou --}}
 <h2> Este es el sidebar personalizado</h2>
@endsection