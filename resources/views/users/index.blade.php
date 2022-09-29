@extends ('layouts.layout')
@section ('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <body class=" bg-dark.bg-gradient" style="width: 100vw; height: 100vh; background-image: url('https://img.freepik.com/fotos-gratis/prancheta-de-vista-superior-com-lapis-em-cima-da-mesa_23-2148539063.jpg?w=2000');
  height: 100vh">
    <div class="container">

      <h1 style="margin-top: 30px;">Funcionários</h1>
<button type="button" class="btn btn-light">Criar Novo</button>
    <div style="margin-top: 20px;border-style: solid; border-color: white; border-width: 1px; border-radius: 10px;background-color: white;">
        <table class="table">

        <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Endereço</th>
        <th scope="col">Telefone</th>
        <th scope="col">Login</th>
        <th scope="col">Edit</th>
        <th scope="col">Remover</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$users->products}}</th>
        <td>{{$user->cpf}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-link">Editar</a>
          <td><button type="button" class="btn btn-link">Remover</td>
      </tr>
    </tbody>
  </table>
</div>
  </body>
</html>
@endsection
