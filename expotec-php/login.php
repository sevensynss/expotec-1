<?php
include('index.php');
session_start();
if (isset($_POST['submit']))
{
    $usuário= $_POST['usuário'];
    $senha= $_POST['senha'];
    $sql= "SELECT * FROM usuários WHERE usuário='$usuário' and senha='$senha'";
    $verifica = mysqli_query($conexao, $sql);


if (mysqli_num_rows($verifica)<1)
{
  unset($_SESSION['usuário']);
  unset($_SESSION['senha']);  
  header('Location: login.php');
}
else
{
    $_SESSION['usuário'] = $usuário;
    $_SESSION['senha'] = $senha;
    header('Location: sistema.php');
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="login do OfficeHub">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="responsivo.css">
    <title>Login</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <h1>OfficeHub</h1>
        </div>
            <div class="menu">
            <a href="http://127.0.0.1:5500/index.html">Home</a>
                <a href="http://127.0.0.1:5500/sobre%20n%C3%B3s.html">Sobre Nós</a>
                <a href="http://127.0.0.1:5500/servi%C3%A7os.html">Serviços</a>
                <a href="http://localhost:85/expotec-php/login.php" id="botao">Login</a>
            </div>    
    </nav>

    <div class="login">
        <div class="informações">
        <h1>Login</h1>
        <form method="POST" action="login.php">
        <input name="usuário" class="dados" type="text" placeholder="usuário">
        <input name="senha" class="dados" type="password" placeholder="senha">
        <input name="submit" class="botao-entrar" type="submit" value="Entrar">
        </form>
        <h2>Ainda não tem cadastro? <a class="link-cadastro" href="http://localhost:85/expotec-php/cadastro.php">Cadastre-se agora!</a></h2>
</div>
</div> 
</form>
 </div> 
</body>
</html>