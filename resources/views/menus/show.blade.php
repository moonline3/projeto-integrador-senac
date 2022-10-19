@extends('layouts.layout')
@section('content')


<h1>Detalhes do Usuario</h1>
<u1>
  <li>{{menu->name}}</li>
  <li>{{$menu->description}}</li>
  <li>{{$menu->is_active}}</li>

</u1>
<div class="form-floating">
  <form action="{{route('menu.product.store', $menu->id)}}" method="post">
    @csrf
<select class="form-select" name="product" id="floatingSelect" aria-label="Floating label select example">
<option value="1">One</option>
</select>
<!-- <div class="container-fluid">
<select class="form-select" aria-label="Default">
<option value="1">One</option> -->
<label for="floatingSelect">Works with selects</label>
<button type="submit" name="btn btn-primary">
 <i class="bi bi-plus-square"></i>
</button>
</form>
</div>
@endsection
