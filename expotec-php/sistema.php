<?php
include('index.php');
session_start();
if((!isset($_SESSION['usuário']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['usuário']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['usuário'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inicie seu projeto aqui">
    <link rel="stylesheet" href=styles.css>
    <link rel="stylesheet" href=sidebar.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sistema - OfficeHub</title>
</head>

<body> 
  <main>  
<nav class="menu-lateral" > 
    <div class="expandir-btn">
     <i id="open-btn-icon"  class="fa-solid fa-bars fa-xl"></i>
</div>

    <ul class="side-items"  style="justify-content: center;">
    <li class="side-item">
       <a href="#">
         <i class="fa-solid fa-house"></i>
           <span class="item-description">
            Página Inicial
         </span>
       </a>
     </li>

     <li class="side-item"  style="justify-content: center;">
       <a href="#" >
       <i style="margin-left:3px;" class="fa-solid fa-calendar-days"></i>
           <span style="margin-left:0px;" class="item-description">
            Agenda
         </span>
       </a>
     </li>

     <li class="side-item">
       <a href="#">
       <i class="fa-solid fa-bell"></i>
           <span class="item-description">
           Notificações
         </span>
       </a>
     </li>

     <li class="side-item">
       <a href="#">
       <i class="fa-solid fa-folder-open"></i>
           <span class="item-description">
           Meus projetos
         </span>
       </a>
     </li>

     <li class="side-item">
       <a href="#">
       <i class="fa-solid fa-user-tie"></i>
           <span class="item-description">
           Colaboradores
         </span>
       </a>
     </li>
            <div class="sair">
            <a class="sair-btn" href="sair.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Sair
                </span>
            </a>
            </div>
    </ul>
</nav>

    <div class="header-sistema" style="margin:0;">
    <div class="headline-msg">
        <?php echo "<h2>Bem vindo, <u>$logado!</u></h2>";?> 
        <h3>Veja seus projetos ou inicie um novo, convide colegas de trabalho ou conecte sua conta OfficeHub a um dos serviços integrados.</h3>
    </div> 
    </div>

    <div class="funcoes">
    <div class="funcoes-btn">
      <h3>Novo projeto</h3>
      <a href="#"> <img  class="funcoes-icon" src="img/novo-arquivo (2).png"></a>
    </div>

    <div class="funcoes-btn">
      <h3>Convidar colaboradores</h3>
      <a href="#"> <img style="margin-left:50px;" class="funcoes-icon" src="img/pessoas-de-negocio.png"></a>
    </div>

    <div class="funcoes-btn">
      <h3>Conecte-se</h3>
    <a href="#"><img class="funcoes-icon" src="img/integracao-do-sistema (1).png"></a>
    </div>
    </div>
</main>

<script src="script.js"></script>
</body>
