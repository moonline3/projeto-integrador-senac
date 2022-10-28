<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <body class=" bg-dark.bg-gradient" style="width: 100vw; height: 100vh; background-image: url('https://www.novumdelta.gr/wp-content/uploads/2020/04/news-construction.jpg');
  height: 100vh; background-size: 100% 100%;">
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
            <a class="nav-link active" aria-current="page" href="{{route('product.index')}}">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Ver Pedidos</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">Funcionários</a>
            </ul>
          </div>
        </div>
        <div class="btn-group dropstart">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opções
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
            <li><a class="dropdown-item" href="#">Home</a></li>
          </ul>
        </div>
      </div>
  </nav>

<h1 style="margin-top: 30px; margin-left: 60px;">Cardápios</h1>

<div class="row row-cols-5 row-cols-md-4 g-4" style="margin-top: 30px; margin-left: 50px;">
  <div class="col">
    <div class="card" style="width:20rem">
      <img src="https://a-static.mlcdn.com.br/1500x1500/papel-de-parede-adesivo-gourmet-menu-restaurantes-cardapio-gf-casa-decor/gfcasadecor/gfc-gourmet-27/f02b063800ef0c5858ff601456b9b236.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cardápio geral</h5>
        <p class="card-text">Perfeito para o dia a dia, com pratosa rápidos, versáteis, deliciosos e baratos!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width:20rem">
      <img src="https://product-hub-prd.madeiramadeira.com.br/2453871/images/9f63cf11-98ea-40c2-9c03-cac39418498448535087papeldeparedeadesivoparacozinhamenugiz45x150cmpp1043sl45x15031531600x600.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cardápio VIP</h5>
        <p class="card-text">Cardápio reservado com antecedencia, feito com carinho para você. Venha fazer parte do grupo VIP!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width:20rem">
      <img src="https://images-americanas.b2w.io/produtos/1723708467/imagens/papel-de-parede-adesivo-azulejos-retro-lanche-giz-para-area-gourmet/1723708467_1_large.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cardápio 3</h5>
        <p class="card-text">Cardápio 3</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width:20rem">
      <img src="https://img.freepik.com/vetores-gratis/bolos-doces-no-quadro-negro_1284-3606.jpg?w=2000" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cardápio 4</h5>
        <p class="card-text">Cardápio 4</p>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
