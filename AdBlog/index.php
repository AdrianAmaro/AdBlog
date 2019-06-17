<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
?>
<?php require_once "./cabecalho.php"; ?>
<div class="container">
    <div class="jumbotron">
      <h1>Bem-vindo</h1>
      <p> Faça um cadastro rapido </p>
      <a href="http://localhost/AdBlog/Cadastro/formC.php"> Aqui!</a>
    </div>
</div>
<?php require_once "./rodape.php"; ?>
