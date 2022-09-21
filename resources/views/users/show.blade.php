@extends('layouts.layout')
@section('content')
<h1>Detalhes do Usuario</h1>
<u1>
  <li>{{$user->name}}</li>
  <li>{{$user->email}}</li>
  <li>{{$user->cpf}}</li>
  <li>{{$user->phone}}</li>
  <li>{{$user->address}}</li>
</u1>
@endsection
