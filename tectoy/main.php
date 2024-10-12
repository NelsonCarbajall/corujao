<?php
include './components/header.php';
include './db/banco.php';
?>

<style>
  .inbox { 
    display: flex;
    flex-wrap: wrap; /* Permite que os itens sejam movidos para a linha seguinte */
    justify-content: space-between; /* Espaça os itens igualmente */
    padding: 1rem; /* Adiciona um pouco de padding */
  }

  .card {
    flex: 0 1 calc(33.333% - 2rem); /* Cada cartão ocupa 1/3 da largura menos a margem */
    margin: 1rem 0; /* Adiciona margem em cima e embaixo */
  }

  @media (max-width: 768px) {
    .card {
      flex: 0 1 100%; /* Em telas menores, cada cartão ocupará 100% */
    }
  }
</style>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Corujão</h1>
    <p class="lead"></p>
  </div>
  
  <div class="container">
    <div class="inbox">
      <?php
        $produtos = ItensProduto();

        foreach($produtos as $produto) {
          echo "<div class='card mb-4 shadow-sm' id='box'>
                  <div class='card-header'>
                    <h4 class='my-0 font-weight-normal'>".$produto['tipo_produto']."</h4>
                  </div>
                  <div class='card-body'>
                    <h1 class='card-title pricing-card-title'>$".$produto['preco_produto']."</h1>
                    <ul class='list-unstyled mt-3 mb-4'>
                      <li>".$produto['marca_produto']."</li>
                      <li>".$produto['descricao_produto']."</li>
                    </ul>
                    <button type='button' class='btn btn-lg btn-block btn-outline-primary'>Compra</button>
                  </div>
                </div>";
        }
      ?>
    </div>
  </div>
</div>

<?php
include './components/footer.php';
?>
