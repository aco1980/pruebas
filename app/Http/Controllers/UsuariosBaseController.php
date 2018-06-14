<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsuariosBaseController extends Controller
{
    public function Index()
    {
     $Titulo = 'Lista de Usuarios';   
     $Usuarios = DB::select('call ListarUsuarios');
     return view('Usuarios.UsuariosBase',compact('Usuarios','Titulo'));
    }    
}
