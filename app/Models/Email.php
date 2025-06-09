<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //Indicando nome da tabela
    protected $table = 'emails'; 

    //indicar as colunas que podem ser cadastradas
    protected $fillable = ['nome, email, assunto, mensagem'];
}
