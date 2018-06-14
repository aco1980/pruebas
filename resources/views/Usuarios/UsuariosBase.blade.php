@extends('../layouts/menu')

    @section('titulo')
        Listado de usuarios
    @endsection

    @section('contenido')       

    <h1>{{ $Titulo }}</h1>

    @empty($Usuarios)
    
       <p>No hay usuarios registrados</p>
         
    @else
        <ul>
            @foreach($Usuarios as $usuario)

            <li>{{ $usuario->nombre }}</li> 

            @endforeach 
        </ul>  
    @endempty  

    @endsection


        @section('sidebar')
           {{-- parent agregar el section definida en el loyou, si no lo coloco no lo pone --}}
            @parent
           {{-- Le agrego contedido a la barra del loyou --}}
            <h2> Este es el sidebar personalizado</h2>
        @endsection



