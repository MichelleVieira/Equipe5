<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fornecedor;

class CadastroServico extends Model
{
    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'forma_de_pagamento',
        'foto'
    ];

    // relacionamento  1:N do Fornecedor com o Cadastro de Serviços
    public function cadastro_serviços()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
