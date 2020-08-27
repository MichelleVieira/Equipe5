<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HubEvents</title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset ('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/demo.css')}}">
    <!-- Pushy CSS -->

    <link rel="stylesheet" href="{{ asset ('css/pushy.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/modal.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/tabela.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/servicosCadastrados.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <div>
        <nav style="background-color: #0e0e0e;" class=" push">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down nav-sub">
                    <li> <button class="menu-btn">&#9776; </button></li>
                    <li> <button class="button-exit"><a href="{{ route('login') }}">Sair</a></button></li>
                </ul>
            </div>
        </nav>

        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">

                <a href="{{ route('index') }}"> <img class="logo-hv" src="img/logo-black.PNG" alt="Logo HubEvents"></a>
                <ul class="menu">

                    <li class="pushy-submenu">
                        <a href="{{ route('home') }}">Página inicial</a>
                    </li>
                    <li>
                        <a class="pushy-submenu" href="{{ route('cadastrarServicos') }}">
                            Cadastrar serviço
                        </a>
                    </li>
                    <li class="pushy-submenu">
                        <a href="{{ route('servicosCadastrados') }}">Serviços cadastrados</a>
                    </li>
                    <li class="pushy-submenu">
                        <a href="#">Editar perfil</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>

    <div class="site-overlay"></div>

    <!-- Your Content -->
    <div id="container">
        <h1 class="service-h1">Serviços cadastrados</h1>


        <div class="notification">

            <ul class="notification-titles">
                <li class="notification-title-one registered-service" >
                    Serviço: Cozinheiro
                </li>
                <li class="notification-title-service registered-service">
                    Valor: A combinar
                </li>
            </ul>

            <h1 class="notification-description"> Descrição do serviço:</h1>

            <p class="notification-description-message">A mensagem que ficará aqui, será a que o prestador de serviço
                vai escrever quando for cadastrar o serviço.
                exemplo de mensagem:<br>
               <strong> Ofereço o serviço de cozinheiro para eventos pequenos e grandes. O valor varia, pois tenho que avaliar
                 as horas de festa, quantidade de convidados e a variedade de pratos. </strong>
            </p>
            
            <div class="photos-service">
                <img class="photos-services-tree" src="img/photo-upload.svg" alt="fotos do serviço">
                <img class="photos-services-tree" src="img/photo-upload.svg" alt="fotos do serviço">
                <img class="photos-services-tree" src="img/photo-upload.svg" alt="fotos do serviço">
            </div>
          

            <ul class="notification-contact">
                <li class="notification-contact-one">
                    <strong>Formas de pagamento:</strong><br>
                    <span>Cartão de crédito, débito e a vista</span>
                </li>
                <li class="notification-contact-two">
                    <button class="delete">Excluir serviço</button>
                </li>
            </ul>

        </div>

    </div>

    <!--  <footer class="site-footer push">This is a footer</footer> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/pushy.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>