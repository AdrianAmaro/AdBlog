<?php
session_start();//sessão starter para Login


if(isset($_GET['acao'])
    && $_GET['acao']=='logout'){
        unset($_SESSION['autenticado']);
}

require_once('./conexao.php');
if(isset($_POST['email'])
    && isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha =($_POST['senha']);

    $sql  = "SELECT count(*) as qtd FROM usuario
               WHERE email=:email
                AND senha=:senha";
    $query = $con->prepare($sql);
    $params = array('email'=>$email,
                    'senha'=>$senha);
    $r      = $query->execute($params);
    $result = $query->fetch();
    // print_r($result) ; exit();
    if($result['qtd']==1){
        $_SESSION['autenticado'] = $email;
        header('Location: index.php');
    }else{
          $mensagem = "Usuário/Senha Incorretos";
    }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Login · Aplicação Estudo de Caso</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">

<title>Registration system PHP and MySQL</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="text-center">
    <form class="form-signin" action="login.php" method="post">
      <img class="mb-4" src="./char.gif" alt="" width="120" height="120">

    <?php if(isset($mensagem)){ ?>
      <div class="alert alert-danger" role="alert">
        <?= $mensagem; ?>
      </div>
    <?php } ?>
        <h2 class="form-signin-heading">Por Favor, informe seus dados</h2>
        <label for="inputEmail" class="sr-only">Email </label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">Entrar</button>
        caso não tenha um cadastro realize um rapidamente clicando <a href="Cadastro/formC.php">Aqui</a>
        <div class="container">

      </form>
    </div>
  </body>
</html>
