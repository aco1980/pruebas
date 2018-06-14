@extends('../layouts/menu')

    @section('titulo')
        Listado de usuarios
    @endsection

    @section('contenido')           

            <strong>Método sin blade</strong>

            <h1><?php echo e($Titulo)  ?></h1>

            <ul>

                <?php foreach ($Users as $user):?>

                <li>  <?php echo e($user) ?> </li>

                <?php endforeach; ?>

            </ul>

            <hr>

            <strong>Método con blade 1</strong>

            <h1>{{ $Titulo }}</h1>

            <ul>

                @foreach($Users as $user)

                    <li>  {{ $user }} </li>

                @endforeach
            </ul>

            <hr>

            <strong>Método con blade 2</strong>

            <h1>{{ $Titulo }}</h1>


            @empty($Users)
                <h2>Lista sin usuarios</h2>
            @else
                <ul>

                    @foreach($Users as $user)

                        <li>  {{ $user }} </li>

                    @endforeach

                </ul>
            @endempty

            <strong>Método con blade 3</strong>

            <h1>{{ $Titulo }}</h1>

            <ul>

                @forelse($Users as $user)

                   <li><a href="{!! action('UsuariosController@Index',$user) !!}"> {{ $user }}</a> </li>

                @empty
                    <li>Lista sin usuarios</li>
                @endforelse

            </ul>

       @endsection


        @section('sidebar')
           {{-- parent agregar el section definida en el loyou, si no lo coloco no lo pone --}}
            @parent
           {{-- Le agrego contedido a la barra del loyou --}}
            <h2> Este es el sidebar personalizado</h2>
        @endsection



