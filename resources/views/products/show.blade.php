@extends('layouts.layout')
@section('content')
<h1>Detalhes do Usuario</h1>
<u1>
  <li>{{$product->name}</li>
  <li>{{$product->description}}</li>
  <li>{{$product->price_cents}}</li>
  <li>{{$product->is_available}}</li>
</u1>
@endsection
