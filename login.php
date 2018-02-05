
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Autenticação com PHP - Página de Login</title>

    <!-- Bootstrap core CSS -->
    <link href="asssets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asssets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" action="logar.php" method="post">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Por favor, inscreva-se</h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
</body>
</html>
