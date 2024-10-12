
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
   

    <title>Corujão</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">

    
    <link href="./css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="/tectoy/cadastroFuncao.php" method="post">
      <img class="mb-4" src="./img/icone.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça seu Cadastro</h1>
      
      <input type="text" id="inputEmail" name="nome_cliente" class="form-control" placeholder="Seu Nome" required autofocus>
      
      <input type="email" id="inputEmail" name="email_cliente" class="form-control" placeholder="Seu email" required autofocus>
      
      <input type="password" id="inputPassword" name="senha_cliente" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        
		<a href="/tectoy/index.php">ja possui uma conta?</a>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
    </form>
  </body>
</html>
