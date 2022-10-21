@extends('layouts.layout')
@section('content')


<h1>Detalhes do Cardápio</h1>
<u1>
  <li>{{$menu->name}}</li>
  <li>{{$menu->description}}</li>
  <li>{{$menu->is_active}}</li>

</u1>
<div class="form-floating">
  <form action="{{route('menu.product.store', $menu->id)}}" method="post">
    @csrf
<label for="selectproducts">Adicionar Produto:</label>
<select id="selectproducts" class="form-select" name="product_id" id="floatingSelect">
  @foreach($addableProducts as $product)
  <option value="{{$product->id}}">{{$product->name}}</option>
  @endforeach
</select>
</div>
<div class="container-fluid">
<label for="floatingSelect">Works with selects</label>
<button type="submit" class="btn btn-success rounded" title="Adicionar produto ao Cardápio">
 <i class="bi bi-plus-square"></i>
</button>
</form>
</div>
<div class="container-fluid">
  <table class="table">
  <!-- <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> -->
  <tbody>
    @foreach($menu->products as $product)
    <tr>
      <td><a target="_blank" hrefk"{{route('product.show', $product->id)}}" method="post">
      <td>{{$product->description}}/td>
      <td>{{$product->price_cents/100}}</td>
      <td>{{$product->is_available ? 'Disponível' : 'Indisponivel'}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic Example">
          <form action="{{route('menu.product.destroy', [$menu->id, $product->id])}}" method="post">@csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" title="Remover">
              <i class="bi bi-trash"></i>
            </button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
