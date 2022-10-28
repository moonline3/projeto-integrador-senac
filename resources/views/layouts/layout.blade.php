<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<body class=" bg-dark.bg-gradient" style="width: 100vw; height: 100vh; background-image: url('https://img.freepik.com/fotos-gratis/prancheta-de-vista-superior-com-lapis-em-cima-da-mesa_23-2148539063.jpg?w=2000');
height: 100vh">
<nav class="navbar navbar-expand-lg bg-light" style="--bs-bg-opacity: 0.5 !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://media.discordapp.net/attachments/996863545385947266/1033099001756668034/Design_sem_nome_1_clipdrop-background-removal.png" alt="Logo" width="90" height="50" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand" aria-current="page" href="{{route('menu.index')}}">Cardápios</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('product.index')}}" >Produtos</a>
        </li>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">Funcionários</a>

          </ul>
        </div>
      </div>
      @guest
      <div class="btn-group dropstart">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Login
        </button>
        <ul class="dropdown-menu">
          <form action="{{route('login')}}" method="post" class="px-3">
            @csrf
            <div class="form-group">
              <label for="input_login-email" class="col-form-label-sm m-0">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" id="input_login-email" placeholder="email@exemplo.com">
            </div>
            <div class="form-group">
              <label for="input_login-password" class="col-form-label-sm m-0">Senha</label>
              <input type="password" name="password" class="form-control form-control-sm" id="input_login-password" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-2">Entrar</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Esqueceu a senha? Clique aqui</a>

        </ul>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Opções
        </button>
        <ul class="dropdown-menu">
          
          <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
          <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        </ul>
      </div>
      @endguest
    </div>
  </div>
</nav>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
