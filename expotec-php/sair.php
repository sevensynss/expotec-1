<?php
session_start();
    unset($_SESSION['usuário']);
    unset($_SESSION['senha']);
    header("Location: login.php");
?>