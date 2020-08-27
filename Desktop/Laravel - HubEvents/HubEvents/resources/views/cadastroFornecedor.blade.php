<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('css/cadastro.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">
    <title>HubEvents</title>
</head>
<body>
    <header class="menu pb-10">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="img/image3800.png" alt="HubEvents">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicos') }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginFornecedor') }}">Promover Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginUsuario') }}"><button type="button" class="btn btn-outline-secondary btn-sm botaologin">Login</button></a>
                </li>
                </ul>
            </div>
        </nav>     
    </header>
<section>
         <div>
            <h5 class="cadastrarUsuario">Faça seu cadastro</h5>
        </div>
        <main role="main" class="container">
            <form action="/cadastroFornecedor" class="form-row" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-5 offset-md-1">
                    <label class="services col-form-label value" for="nome">Nome Completo *</label><br>
                    <input type="text"  name="nome" id="nome" class="form-control" placeholder="Nome Completo" required></input>  
                </div>

                <div class="form-group col-md-5">
                    <label for="email" class="services col-form-label value">E-mail *</label>
                    <input type="email"  name="email" id="email" class="form-control" placeholder="Email" required></input>
                </div>

                 <div class="form-group col-md-5 offset-md-1">
                    <label for="telefoneCelular" class="services col-form-label value">Celular *</label>
                    <input type="text"  name="telefoneCelular" id="telefoneCelular" class="form-control" placeholder="Telefone Celular" required></input>
                </div>

                 <div class="form-group col-md-5">
                    <label for="telefoneFixo" class="services col-form-label value">Fixo *</label>
                    <input type="text"  name="telefoneFixo" id="telefoneFixo" class="form-control" placeholder="Telefone Fixo"></input>
                </div>

                 <div class="form-group col-md-10 offset-md-1">
                    <label for="endereco" class="services col-form-label value">Endereço</label>
                    <input type="text"  name="endereco" id="endereco" class="form-control" placeholder="Rua das Graças, nº 900"></input>
                </div>

                <div class="form-group col-md-4 offset-md-1">
                    <label for="cidade" class="services col-form-label value">Cidade </label>
                    <input type="text"  name="cidade" id="cidade" class="form-control"></input>
                </div>
                 <div class="form-group col-md-4">
                    <label for="estado" class="services col-form-label value">Estado </label>
                    <input type="text"  name="estado" id="estado" class="form-control"></input>
                </div>

                 <div class="form-group col-md-2">
                    <label for="cep" class="services col-form-label value">CEP: </label>
                    <input type="text"  name="cep" id="cep" class="form-control"></input>
                </div>
                
                 <div class="form-group col-md-5 offset-md-1">
                    <label for="senha" class="services col-form-label value">Senha </label>
                    <input type="password"  name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required></input>
                </div>

                <div class=" col-md-6 offset-md-1 mt-2 mb-2">
                  <button type="submit" class="btn btn-success">Salvar</button>
                 </div>,
                 @csrf
            </form>
         </main>
</section> 

 <footer>
    <div id="location-section">
        <div class="container pt-5">
            <div class="row margem-top pt-1">
                <div class="col-md-4">
                    <h4>Localização</h4>
                    <p>Av. Emilio Ribas 1056 - <br>Guarulhos SP</p>
                </div>
                <div class="col-md-4">
                    <h4>Siga-nos</h4>
                    <div id="social-media">
                        <a href=""><img src="img/facebook.png" alt="facebook"></a>
                        <a href=""><img src="img/twitter.png" alt="twitter"></a>
                        <a href=""><img src="img/linkedin.png" alt="linkedin"></a>
                        <a href=""><img src="img/instagram.png" alt="instagram"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>A Hub Events</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Consequatur similique quia tempore magni velit enim?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright-section">
        <p class="rodape">copyright &copy hub events</p>
    </div>
</footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
       
</body>
</html>

