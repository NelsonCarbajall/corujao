
<style>
  .imag{
    border:none;
    border-radius: 10px;
    outline: none;

  }
  button{
    border:none;
    border-radius: 10px;
    outline: none;
  }

</style>

<?php
include './components/header.php';
include './db/banco.php'


?>


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Corujão</h1>
      <p class="lead">Cadastrar Produto</p>
    </div>

    <div class="container">

    <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>CODIGO DO PRODUTO</th>
        <th>MARCA DO PRODUTO</th>
        <th>TIPO DO PRODUTO</th>
        <th>DESCRIÇÂO DO PRODUTO</th>
        <th>PREÇO DO PRODUTO</th>
      </tr>
    </thead>
    <tbody>
<?php
    $produtos = ItensProduto();
    
    for($i = 0; $i < count($produtos); $i++) {
      echo "<tr>";
      echo "<td>".$produtos[$i]["id_produto"]."</td>";
      echo "<td>".$produtos[$i]["marca_produto"]."</td>";
      echo "<td>".$produtos[$i]["tipo_produto"]."</td>";
      echo "<td>".$produtos[$i]["descricao_produto"]."</td>";
      echo "<td>"."$".$produtos[$i]["preco_produto"]."</td>";     
      echo "<td><form method='post' action='/tectoy/exclusao.php'>
                <input type='hidden' name='excluir' value='".$produtos[$i]["id_produto"]."'>
                <button type='submit' onclick='return confirm(\"Você tem certeza que deseja excluir?\");'>
                <img src='./img/excluir.png' class='imag' width='30px'></button></form>
          </td>";    
     echo "</tr>";
        }
        
    
?>

    </tbody>
  </table>
    </div>

<?php
 
 include './components/footer.php';
?>