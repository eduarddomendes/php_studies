<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Login</title>
</head>
<body>
    <?php
  const LOGIN = "eduarddomendes";
  const SENHA = "eduardo123";
  if ($_POST["login"] == LOGIN && $_POST["senha"] == SENHA ) { 
    echo "<p>Usuário Logado!";     
    } else {
         echo "<p>Login ou Senha inválidos!";
    }
    ?>
</body>
</html>