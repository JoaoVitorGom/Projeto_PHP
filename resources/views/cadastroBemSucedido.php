<?php
require('src/conexao_bd_login.php');
// Verifica se o parâmetro de nome de usuário está presente na URL
if (!isset($_GET['username'])) {
    // Se o nome de usuário não estiver presente, redireciona para a página de login
    header("Location: login.php");
    exit();
}

// Obtém o nome de usuário da URL
$username = $_GET['username'];
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Kingdom of Burguer - Boas Vindas</title>
</head>
<body>
    <main>
        <section class="container-admin-banner">
        <img src="img/Pioneiro-Photoroom.png" class="logo-admin" alt="logo-serenatto">
        <h1>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</h1>
        <br>
        <h2>Você foi cadastrado com sucesso</h2>
        <br>
        <input type="button" class="botao-cadastrar" value="Entrar Como Admin" onclick="window.location.href='admin.php'">
        <br>
        <input type="button" class="botao-cadastrar" value="Logout" onclick="window.location.href='logout.php'">
      </section>
    </main>
</body>
</html>



