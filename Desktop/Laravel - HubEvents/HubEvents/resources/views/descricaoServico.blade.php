<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de serviço</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/descricaoServico2.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">
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
                    <a class="nav-link" href="{{ route('login') }}">Promover Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-outline-secondary btn-sm botaologin">Login</button></a>
                </li>
                </ul>
            </div>
        </nav>   
    </header>

<!-- Fiz uma section para essa parte do site  -->
    <section> 
        <div class="descricao">  <!-- uma DIV para cada parte-->
            <p>
                Churrasco do Sr João <br>
                Descrição: Churrasco para eventos a partir de 50 pessoas
            </p>
            <br>
            <img class="imagemDescricao" src="./img/churrasco.jpg" alt="churrasco">
            <br>
        </div> 

        <div> <!-- uma DIV para cada parte-->
            <nav class="nav-contratar">
                <button class="contratar">Contratar Serviço</button>
                <button class="contratar">Enviar Mensagem</button>
                <button class="contratar">Tenho Interesse</button>
            </nav>
        </div> 
        
        <div> <!-- uma DIV para cada parte-->
            <br>
            <nav class="pagamento">
                <div class="valores">
                    R$ {valor}                   
                </div> 
                <div class="valores">
                    Forma de pagamento: {pagamento}                   
                </div> 
            </nav>
        </div>
        
    </section>
<!-- Fim da section -->


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