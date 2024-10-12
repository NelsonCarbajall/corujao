<?php
include './components/header.php';
include './db/banco.php'
?>






<div class="container">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Corujão</h1>
      <p class="lead">Registrar Produto</p>
    </div>

<div class="container">
      <form action="/tectoy/processar.php" method="post">
  <div class="mb-3 mt-3">
    <label for="nome" class="form-label">Marca do Produto:</label>
    <input type="text" class="form-control" id="nome" placeholder="Marca do Produto" name="marca_produto">
  </div>
  <div class="mb-3 mt-3">
    <label for="nome" class="form-label">Tipo do Produto:</label>
    <input type="text" class="form-control" id="nome" placeholder="Tipo do Produto" name="tipo_produto">
  </div>
  <div class="mb-3 mt-3">
    <label for="nome" class="form-label">Descrição do Produto:</label>
    <input type="text" class="form-control" id="nome" placeholder="Descrição do Produto" name="descricao_produto">
  </div>
  <div class="mb-3 mt-3">
    <label for="nome" class="form-label">Preço do Produto:</label>
    <input type="number" step="0.03" class="form-control" id="nome" placeholder="Preço do Produto" name="preco_produto">
  </div>
  
  
  


  <button type="submit" class="btn btn-primary">Register</button>
</form>

      </div>





<?php

include  './components/footer.php';
?>