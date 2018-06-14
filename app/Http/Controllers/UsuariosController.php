<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Profesion;

class UsuariosController extends Controller
{
    public function index($nombre = 'NO REGISTRADO')

    {
      return 'El nombre del usuario : ' . $nombre;

    }

    public function  Listado()
    {

     $Users = [
         'Marcos',
         'Ana',
         'Raul',
         'Sofía',
         '<script>alert("hola")</script>',
         'Darío'

     ];

   //     Método 1
   //  return view('usuario',['users' => $Users,'Titulo' =>'Listado de usuarios']);

   //     Método 2
   //  return view('usuario')
   //      ->with(['Users' => $Users])
   //      ->with(['Titulo'=>'Listado de usuarios']);

         //Método 3
       $Titulo = "Listado de usuarios";


   // Usuarios.listado quiere decir que esta dentro del directorio usuarios y el nombre de la vista es listado
       return view('Usuarios.listado',compact('Users','Titulo'));
    }

    public function Show($id = 0)
    {

        return view('Usuarios.show',compact('id'));

    }

    public function NewUser()
    {
       $Titulo = 'New User';
       return view('Usuarios.NewUser',compact('Titulo'));

    }

    public function GuardarUser(Request $request)
    {

        $Titulo = 'New User';

        $profesionId = Profesion::wherenombre('Desarrollador Back-End')->value('id');
        $nombre = $request->input('nombre');
       

        user::create([
            'nombre'       => $nombre,
            'email'        => $nombre . '@hotmail.com',
            'password'     => bcrypt('castrito'),
            'profesion_id' => $profesionId,
                ]);

        return redirect('usuariosbase');
    }
}
