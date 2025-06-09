<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class ContatoController extends Controller
{
    Public function index(){
        return view('site.emails');
    }

     Public function create(){
        return view('site.Contato');
    }

    Public function store( Request $request){
       
        //Cadastrar no banco de dados na tabela email os valores correspondentes
        $email = Email::create($request->all());

        dd($email);
    }
}
