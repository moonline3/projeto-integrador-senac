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
        <th scope="row">Amora Aleno</th>
        <td>02334578</td>
        <td>rua marechal</td>
        <td>(42)91134-5658</td>
        <td>bistecafofo@gmail</td>
        <td><button type="button" class="btn btn-link">Editar</td>
          <td><button type="button" class="btn btn-link">Remover</td>
      </tr>
      <tr>
        <th scope="row">Milo Castello</th>
        <td>07354589</td>
        <td>rua das flores</td>
        <td>(42)98825-3474</td>
        <td>MiloMiguel@gmail</td>
        <td><button type="button" class="btn btn-link">Editar</td>
          <td><button type="button" class="btn btn-link">Remover</td>
      </tr>
    </tbody>
  </table>
</div>
  </body>
</html>
@endsection
<!-- falta arrumar -->
