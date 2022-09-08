
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @extends('layouts.app')
@section('content')
<div class="container">


    <form method="POST" ACTION=>
      <div class="mb-3">
        <h2><label for="exampleInputEmail1" class="form-label">Endereço de Email</label><h1>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
      <h2><label for="exampleInputPassword1" class="form-label">Senha</label></h1>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Você concorda com os termos de serviço?</label>
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>

  <a class="btn btn-primary" href="cadastro.html" role="button">Cadastro</a>
    </form>

</div>

</div>
@endsection
