@extends ('layouts.layout')
@section ('content')



  <body class=" bg-dark.bg-gradient" style="width: 100vw; height: 100vh; background-image: url('https://img.freepik.com/fotos-gratis/prancheta-de-vista-superior-com-lapis-em-cima-da-mesa_23-2148539063.jpg?w=2000');
  height: 100vh">
    <div class="container">

      <h1 style="margin-top: 30px;">Produtos</h1>
<a href="{{route('product.store)}}" class="btn btn-light">Criar Novo</a>
    <div style="margin-top: 20px;border-style: solid; border-color: white; border-width: 1px; border-radius: 10px;background-color: white;">
        <table class="table">

        <thead>
        <tr>
            <th scope="col">Produto</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Disponibilidade</th>
            <th scope="col">Visualizar</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>

        </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
        <tr>
          <th scope="row">{{$product->name}}</th>
          <td>{{$product->description}}</td>
          <td>{{$product->price_cents}}</td>
          <td>{{$product->is_available}}</td>



            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
</svg></td>
            <td>

              <a method="post" href="{{route('product.update', $product->id)}}">
                @csrf
                @method('put')
              </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
</svg> </td>
            <td><form action="{{route('product.destroy', $product->id)}}" method="post">
              @csrf
              @method('delete')
             <button type="submit" name="button"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
</svg></button> </form> </td>
@endforeach
        </tr>




            </tbody>
        </table>
    </div>
  </div>
</div>
  </body>
</html>
