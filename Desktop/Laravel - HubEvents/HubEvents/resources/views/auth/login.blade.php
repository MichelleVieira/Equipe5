<!DOCTYPE html>
<html lang="br-pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="stylesheet" href="{{ asset ('css/login.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="shortcut icon" href="{{ asset('img/logo-white.jpeg') }}">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>HubEvents</title>
</head>

<body>
  <div class="content">
    <a  href="{{ route('index') }}"> <img src="img/logo-white.jpeg" alt="logo" /> </a>
    <form action="{{ route('servicos') }}" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/> 

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="email">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>  
      
        @error('senha')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      
      </div>
     
      <a href="#"  data-toggle="modal" data-target="#ModalRS">Esqueci minha senha</a></br>
      <div class="button">
        <button type="submit" class="btn btn-primary">Entrar</button>
        <p>ou</p>
        <button class="btn btn-primary">Entrar com o Facebook</button>
      </div>
      @csrf
    </form>

    <a href="{{ url('cadastro') }}" class="cadastro">Ainda não tem cadastro ?
      <span>Cadastre-se agora</span></a>
  </div>

  <!-- Modal recuperar senha -->
  <div class="modal fade" id="ModalRS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-regis">
        <div class="modal-header">
          <h5 class="modal-title title-regis" id="exampleModalLabel">Recuperar senha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="modal-form-regis">
    
            <div class="form-group">
              <label for="email">Email*</label>
              <input type="text" name="email" id="email" placeholder="Digite o endereço de e-mail cadastrado" class="form-control" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn modal-btn-enviar">Enviar</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>