
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
    <form class="form-signin" action="/tectoy/verificar.php" method="post">
      <img class="mb-4" src="./img/icone.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" name="email" required>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label><br>
		<a href="/tectoy/cadastro.php">Ainda não tem conta?</a>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
    </form>
  </body>
</html>
