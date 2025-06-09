<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    Public function index(){
        return view('site.emails');
    }
}
