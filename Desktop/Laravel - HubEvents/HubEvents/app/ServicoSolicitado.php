<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
use App\CadastroServico;

class ServicoSolicitado extends Model
{
    protected $fillable = [
        'pagamento',
        'status'
    ];

    // Relacionamento 1:N da tabela servico_solicitados com a tabela clientes
    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento N:N da tabela  servico_solicitados com a tabela cadastro_servico
    public function cadastro_servicos()
    {
        return $this->belongsToMany(CadastroServico::class);
    }
}


