
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="cadastre-se no OfficeHub">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsivo.css">
    <title>Cadastre-se</title>
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

    <div class="cadastro">
        <form method='POST' action='cadastro.php' >
         <h1>Cadastre-se</h1>  

    <div class="input-formulario">
        <input type="text" name="nome" id="nome" class="input-cadastro" required>
         <label for="nome" class="label-input">Nome</label>
    </div>
    
    <div class="input-formulario"> 
        <input type="text" name="usuário" id="usuário" class="input-cadastro" required> 
        <label for="usuário" class="label-input">Usuário</label>
    </div> 

    <div class="input-formulario"> 
        <input type="text" name="CPF" id="CPF" class="input-cadastro" required>
         <label for="CPF" class="label-input">CPF</label>
    </div>  

    <div class="input-formulario"> 
        <input type="password" name="senha" id="senha" class="input-cadastro" required>
         <label for="senha" class="label-input">Senha</label>
    </div>  


    <div class="sexo">
    <p>Sexo</p>
    <input type="radio" id="feminino" name="sexo" value="feminino" required> 
    <label for="feminino">Feminino</label>
   
   
    <input type="radio" id="masculino" name="sexo" value="masculino" required>
     <label for="masculino">Masculino</label>
 </div>
   
    <div class="input-formulario">
        <input type="date" name="data-nascimento" id="data-nascimento" class="input-cadastro" required>
        <label for="data-nascimento" class="label-input">Data de nascimento</label>
    </div> 

    <div class="input-formulario"> 
        <input type="text" name="e-mail" id="e-mail" class="input-cadastro" required>
        <label for="e-mail" class="label-input">E-mail</label>   
    </div> 

    <div class="input-formulario">
        <input type="text" name="telefone" id="telefone" class="input-cadastro" required> 
        <label for="telefone" class="label-input">Telefone</label>  
    </div> 
    <input name="submit" type="submit" class="btn-cadastrar" value="Finalizar cadastro">
    <h2>Já possui cadastro? <a class="link-login" href="http://localhost:85/expotec-php/login.php">Entre aqui!</a></h2>
</form>
 </div> 
</body>
</html>

<?php
include('index.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nome = $_POST['nome'];
$usuário = $_POST['usuário'];
$CPF = $_POST['CPF'];
$sexo = $_POST['sexo'];
$datanascimento = $_POST['data-nascimento'];
$email= $_POST['e-mail'];
$telefone= $_POST['telefone'];
$senha= $_POST['senha'];
$sql=("INSERT INTO usuários (CPF, nome, usuário, sexo, datanascto, email, telefone, senha) VALUES('$CPF', '$nome', '$usuário', '$sexo', '$datanascimento', '$email', '$telefone', '$senha')");
mysqli_query($conexao, $sql);

header('Location: login.php');
}
?>