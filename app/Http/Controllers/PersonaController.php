<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    function mostrar($nombre_usuario =null){
        if($nombre_usuario == null){
            return 'Debe ingresar un nombre';
        }
        return 'Nombre Usuario = ' .$nombre_usuario;
    }
}
