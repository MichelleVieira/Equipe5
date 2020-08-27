<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function cadastrarFornecedor()
    {
        // Cadastro do fornecedor
        $cadastrarFornecedor = new Fornecedor();
        
        $cadastrarFornecedor->nome = request('nome');
        $cadastrarFornecedor->email = request('email');
        $cadastrarFornecedor->telefoneCelular = request('telefoneCelular');
        $cadastrarFornecedor->telefoneFixo = request('telefoneFixo');
        $cadastrarFornecedor->endereco = request('endereco');
        $cadastrarFornecedor->cidade = request('cidade');
        $cadastrarFornecedor->estado = request('estado');
        $cadastrarFornecedor->cep = request('cep');
        $cadastrarFornecedor->senha = bcrypt(request('senha')); // senha criptografada 
        $cadastrarFornecedor->save();
        
        
        
        return redirect('/cadastroFornecedor'); // para retornar o arquivo cadastroFornecedor.blade.php
    }
}
