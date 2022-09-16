<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <body>
    <div class="container" style="margin-top: 200px">
    <h2>Funcionários</h2>

    <table class="table">
      <button type="button" class="btn btn-outline-secondary btn-lg"><a href="file:///home/kingdreemur/Downloads/ProjetoGerente/Login(SemNumero).html">Criar Novo</a></button>
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
      @foreach($users as $user)
      <tr>
        <th scope="row">({ $user->nome})</th>
        <td>({ $user->cpf})</td>
        <td>({ $user->endereço})</td>
        <td>({ $user->telefone})</td>
        <td>({ $user->login})</td>
        <td><button type="button" class="btn btn-link">Editar</td>
          <td><button type="button" class="btn btn-link">Remover</td>
            <!-- <a href="{(route('user.edit', $user->id))}" -->
      </tr>
      </tbody>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">({ $user->nome})</th>
        <td>({ $user->cpf})</td>
        <td>({ $user->endereço})</td>
        <td>({ $user->telefone})</td>
        <td>({ $user->login})</td>
        <td><button type="button" class="btn btn-link">Editar</td>
          <td><button type="button" class="btn btn-link">Remover</td>
      </tr>
      <form action="{(route('user.destroy', user->id))}" method="post">
        @csrf
        @method('delete')
        <button type="button" name="button"></button>

      </form>



      </tbody>
      <tr>
        <th scope="row"></th>
        <td colspan="2"></td>
        <td></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  </body>
</html>

<!-- falta arrumar -->
