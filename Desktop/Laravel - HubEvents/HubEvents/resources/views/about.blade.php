<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
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
        <div class="fullwidth-section section-header">
            <img  class="img-overlay-solid" src="img/header_sobre (2).jpg">
        </div>
    </section>
   
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 alinha-sobre">
                    <h4 class="sobre pt-4">Quem Somos</h4>
                    <p>
                        A HubEvents é uma plataforma que conecta pessoas a experiências únicas, 
                        desde o momento de descoberta à realização do evento. Através da tecnologia, 
                        possibilitamos que organizadores possam criar, organizar, gerir e divulgar eventos, 
                        proporcionando ao participante uma pluralidade de opções para escolher o que quiser viver
                    </p>
                    <h4 class="sobre pt-4">O que propomos</h4>
                    <p>
                        Você com certeza já ouviu ou já falou alguma vez a seguinte frase: 
                        “Se quer algo bem feito, faça você mesmo”. 
                        Nós concordamos tanto com essa expressão, 
                        que ela está presente inclusive na nossa marca que faz uma referência à 
                        expressão em inglês do it yourself, que significa faça você mesmo.
                        Afinal, o seu evento precisa parecer com você e com seu público e ninguém melhor 
                        do que você mesmo pra escolher cada detalhe.
                    </p>  
                </div>
                <div class="col-md-6 alinha-logo">
                    <img src="img/log-transparente.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="sobre-simplicidade">
        <div class="container">
            <div class="row">
                <div class="col-md-6  alinha-sobre">
                        <h4 class="sobre pt-4">Simplicidade</h4>
                        <h5 class="sobre">Da compra ao evento!</h5><br>
                        <p>
                            Garantimos agilidade e segurança tanto na compra, quanto no evento.
                            Uma gestão completa e otimizada através de dezenas de ferramentas simples de usar! 
                            Com tecnologia e liberdade, o produtor de eventos pode criar uma página personalizada, 
                            ter um controle inteligente de seus participantes e vender seu produtos.
                        </p> 
                        <p class="fraseEfeito pt-1">
                            <h3>Seu evento conosco <br>
                            Será um CASE de sucesso!</h3>
                        </p>
                </div>

                <div class="col-md-6 alinha-sobre">
                    <img src="img/moca-removebg.png" class="img-sobre">
                </div>
            </div>
        </div>
    </section>
 <footer>
    <div id="location-section">
        <div class="container">
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

