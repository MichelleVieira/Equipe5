<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
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
