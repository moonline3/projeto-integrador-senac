@extends ('layouts.layout')
@section ('content')

    <div class="container" style="margin-top:20px">
    <h2>Funcionários</h2>

    <table class="table">
      <a class="btn btn-outline-secondary btn-lg"href="{{route('user.create')}}">Criar Novo</a>
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
        <th scope="row">{{$user->name}}</th>
        <td>{{$user->cpf}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-link">Editar </a></td>
        <td>
            <form action="{{route('user.destroy', $user->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-link">Remover</button>
           </form>
        </td>
              <a href="{(route('user.edit', $user->id))}"></a>



      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
<!-- falta arrumar -->
