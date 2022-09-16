@extends ('layouts.layout')
@section ('content')

    <div class="container" style="margin-top:20px">
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
        <th scope="row">{{$user->nome}}</th>
        <td>{{$user->cpf}}</td>
        <td>{{$user->endereço}}</td>
        <td>{{$user->telefone}}</td>
        <td>{{$user->login}}</td>
        <td><button type="button" class="btn btn-link">Editar</td>
          <td><button type="button" class="btn btn-link">Remover</td>
              <a href="{(route('user.edit', $user->id))}"></a>

      <form action="{(route('user.destroy', user->id))}" method="post">
        @csrf
        @method('delete')
        <button type="button" name="button"></button>

      </form>


      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
<!-- falta arrumar -->
