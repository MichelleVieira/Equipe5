<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Fornecedor extends Model
{
    protected $fillable = [
        'nome', 
        'email', 
        'telefoneCelular', 
        'telefoneFixo', 
        'endereco', 
        'cidade', 
        'estado', 
        'cep', 
        'senha'
    ];
}
