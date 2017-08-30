<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Asignatura;

class UsuarioController extends Controller
{



    public function getHome(){
      // select * from usuario
      $usuarios = Usuario::all();

      return view('welcome',['usuarios' => $usuarios]);


    }
}
