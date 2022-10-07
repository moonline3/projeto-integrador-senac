@extends ('layouts.layout')
@section ('content')

<!-- Copia do Users -->

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

      <h1 style="margin-top: 30px;">Cardápios</h1>
<a class="btn btn-light" href="{{route('menu.create')}}">Criar Novo</a>
    <div style="margin-top: 20px;border-style: solid; border-color: white; border-width: 1px; border-radius: 10px;background-color: white;">
        <table class="table">

        <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ativo</th>

      </tr>
    </thead>

    <tbody>
      @foreach ($menus as $menu)
      <tr>
        <th scope="row">{{$menu->name}}</th>
        <td>{{$menu->description}}</td>
        <td>{{$menu->is_active}}</td>




        <td><a href="{{route('menu.edit', $menu->id)}}" class="btn btn-link" method="post">Editar </a>
          </form> </td>






          <td><form action="{{route('menu.destroy', $menu->id)}}" method="post">
            @csrf
            @method('delete')

          <td><button type="submit" class="btn btn-link">Remover</td>


         </button>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  </body>
</html>
@endsection
