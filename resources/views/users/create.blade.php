@extends ('layouts.layout')
@section ('content')

<div class="d-flex justify-content-center">

  Checkl!st
</div>
<div style="margin-top: 150px;">
<br>
<div class="container mt-4">
  <h1>Cadastro de Funcionário</h1>
  <br>
  <form class="row g-3" method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nome</label>
      <input type="text" class="form-control" name='name' id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Telefone</label>
      <input type="text" class="form-control" name='phone' id="inputPassword4">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name='email' id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Senha</label>
      <input type="password" class="form-control" name='password' id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Endereço</label>
      <input type="text" class="form-control" name='address' id="inputAddress" placeholder="1234 Rua Jorje Amálio">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Cidade</label>
      <input type="text" class="form-control" name='city' id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Tipo de Usuário</label>
      <select id="inputState" name='type' class="form-select">
        <option value='gerente' selected>Gerente</option>
        <option value='gerente'>Funcionário</option>

      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">CPF</label>
      <input type="text" name='cpf' class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Useless Piece of Space
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>
</div>
</div>
@endsection
