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
    <div class="position-absolute top-50 start-50 translate-middle border-box p-5 btn-outline-primary border rounded-2 bg-white" style="width: 25rem;">
      <h5  class="text-center fs-3 mb-5" >Adicionar Produto</h5>
        <div class="row fs-5">
          <p class="col">Nome: <!--Caixa--></p>
          <input placeholder="Batata" class="col" type="text" name="" id="" style="height: 2rem;">
        </div>
        <div class="row fs-5">
          <p class="col">Preço: <!--Caixa--></p>
          <input placeholder="10$" class="col" type="text" name="" id="" style="height: 2rem;">
        </div>
        <div class="row fs-5">
          <p class="col">Descrição: <!--Caixa--></p>
          <input placeholder="Muito gostosa" class="col" type="text" name="" id="" style="height: 2rem;">
        </div>
        <div class="form-check fs-5">
          <label class="form-check-label" for="flexCheckDefault">
            Disponível
          </label>
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        </div>
        <div class="col-md-4 pt-2 fs-5">
          <label for="inputState" class="form-label">Imagem:</label>
          <select id="inputState" class="form-select" style="width: 18rem;">
            <option selected>Selecione o arquivo</option>
          </select>
        </div>
        <button type="button" class="btn btn-primary mt-4 text-center mt-2" style="width: 100%; ">Criar produto</button>
    </div>



  </body>
</html>
