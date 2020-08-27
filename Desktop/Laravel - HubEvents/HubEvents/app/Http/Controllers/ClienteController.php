<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Cliente;


class ClienteController extends Controller
 {
    public function cadastrarCliente()
    {
        // Cadastro do cliente
        $cadastrarCliente = new Cliente;
        
        $cadastrarCliente->nome = request('nome');
        $cadastrarCliente->email = request('email');
        $cadastrarCliente->telefoneCelular = request('telefoneCelular');
        $cadastrarCliente->telefoneFixo = request('telefoneFixo');
        $cadastrarCliente->endereco = request('endereco');
        $cadastrarCliente->cidade = request('cidade');
        $cadastrarCliente->estado = request('estado');
        $cadastrarCliente->cep = request('cep');
       // $cadastrarCliente->senha = request ('senha');
        $cadastrarCliente->senha = bcrypt(request('senha'));
        $cadastrarCliente->save();
        
        
        
        return redirect('/cadastro'); // para retornar o arquivo cadastro.blade.php
    }

}
