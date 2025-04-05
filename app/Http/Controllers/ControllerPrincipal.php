<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrincipal extends Controller
{
    Public function home(){
        return view('site.Home');
    }
    Public function departamento(){
        return view('site.Departamento');
    }

    Public function cursos(){
        return view('site.Cursos');
    }
    
    Public function contato(){
        return view('site.Contato');
    }
}