@extends ('layouts.layout')
@section ('content')



<body class=" bg-dark.bg-gradient" style="width: 100vw; height: 100vh; background-image: url('https://img.freepik.com/fotos-gratis/prancheta-de-vista-superior-com-lapis-em-cima-da-mesa_23-2148539063.jpg?w=2000');
height: 100vh">
<form method="POST" action="{{route('menu.store')}}">
    @csrf
    <div class="position-absolute top-50 start-50 translate-middle border-box p-5 btn-outline-primary border rounded-2 bg-white" style="width: 25rem;">
  <h5  class="text-center fs-3 mb-5" >Adicionar Cardápio</h5>
    <div class="row fs-5">
      <p class="col">Nome: <!--Caixa--></p>
      <input placeholder="Cardápio" class="col" type="text" name="name" id="" style="height: 2rem;">
    </div>
    <div class="row fs-5">
      <p class="col">Descrição: <!--Caixa--></p>
      <input placeholder="Informações do Cardápio" class="col" type="text" name="description" id="" style="height: 2rem;">
    </div>
    <div class="form-check fs-5">
      <label class="form-check-label" for="flexCheckDefault" name="is_available">
        Disponíbilidade
      </label>
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="is_available">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar
    </button>
  </div>
    <!-- <button type="submit"  -->
  </form>
