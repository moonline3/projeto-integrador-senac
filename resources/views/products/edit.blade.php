@extends ('layouts.layout')
@section ('content')



<body class=" bg-dark.bg-gradient" style="width: 100vw; height: 100vh; background-image: url('https://img.freepik.com/fotos-gratis/prancheta-de-vista-superior-com-lapis-em-cima-da-mesa_23-2148539063.jpg?w=2000');
height: 100vh">
<form method="POST" action="{{route('product.update', $product->id)}}">
  @csrf
  @method('put')
  <div class="position-absolute top-50 start-50 translate-middle border-box p-5 btn-outline-primary border rounded-2 bg-white" style="width: 25rem;">
    <h5  class="text-center fs-3 mb-5" >Adicionar Produto</h5>
      <div class="row fs-5">
        <p class="col">Nome: <!--Caixa--></p>
        <input placeholder="Batata" class="col" type="text" value="{{$product->products}}" name="products" id="" style="height: 2rem;">
      </div>
      <div class="row fs-5">
        <p class="col">Preço: <!--Caixa--></p>
        <input placeholder="10$" class="col" type="text" value="{{$product->price_cents}}" name="price_cents" id="" style="height: 2rem;">
      </div>
      <div class="row fs-5">
        <p class="col">Descrição: <!--Caixa--></p>
        <input placeholder="Muito gostosa" class="col" type="text" value="{{$product->description}}" name="description" id="" style="height: 2rem;">
      </div>
      <div class="form-check fs-5">
        <label class="form-check-label" for="flexCheckDefault">
          Disponível
        </label>
        <input class="form-check-input" type="checkbox" value="{{$product->is_available}}" id="flexCheckDefault" name="is_available">
      </div>
      <div class="col-md-4 pt-2 fs-5">
        <label for="inputState" class="form-label">Imagem:</label>
        <select id="inputState" class="form-select" style="width: 18rem;">
          <option selected>Selecione o arquivo</option>
        </select>
      </div>
      <button type="button" class="btn btn-primary mt-4 text-center mt-2" style="width: 100%; ">Criar produto</button>
  </div>
</form>


</body>
</html>
@endsection
