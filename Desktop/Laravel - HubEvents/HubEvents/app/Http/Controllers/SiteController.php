<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
     //Pagina inicial do site
        return view('index');
    }

    public function about()
    {
     //Pagina sobre
        return view('about');
    }

    public function servicos()
    {
     //Pagina de serviços
        return view('servicos');
    }

    public function login()
    {
     //Pagina de login
        return view('login');
    }

    public function loginFornecedor()
    {
        //Pagina de login do fornecedor
        return view('loginFornecedor');
    }

    public function descricaoServico()
    {
    // Pagina de Descrição de Servicos 
        return view('descricaoServico');
    }

    public function cadastrarServicos()
    {
    // Pagina de Cadastro de Serviços
        return view('cadastrarServicos');
    }

    public function homeCadastrarServicos()
    {
    // Home do Cadastro de Serviços
        return view('home');
    }

    public function servicosCadastrados()
    {
    // Página de Serviços Cadastrados
        return view('servicosCadastrados');
    }

    public function logout()
    {
    // Pagina de Logout
        return view('logout');
    }

    public function cadastro()
    {
     // Página de Cadastro
        return view('cadastro');   
    }

    public function cadastroFornecedor()
    {
        // Pagina de Cadastro do Fornecedor
        return view ('cadastroFornecedor');
    }
}
