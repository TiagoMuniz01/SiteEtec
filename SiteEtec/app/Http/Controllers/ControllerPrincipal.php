<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrincipal extends Controller
{
    public function home(){
        return view('site.Home');
    }
/*
    Public function rota1(){
        return view('site.rota1');
    }

    Public function rota2(){
        return view('site.rota2');
    }
    
    Public function rota3(){
        return view('site.rota3');
    }

    Public function rota4(){
        return view('site.rota4');
    }*/
}