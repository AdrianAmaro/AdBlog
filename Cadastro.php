<?php
  include_once "../conexao.php";

  $usuario= array('email'=>$_POST['email'],
                 'senha'=>$_POST['senha'],
                 'apelido'=>$_POST['apelido']);



  $sql = "INSERT INTO usuario (email, senha, apelido)
            VALUES(:email, :senha, :apelido );";
  $query = $con->prepare($sql);
  $r = $query->execute($usuario);
    if($r==true){
      echo "Dados cadastrados com sucesso";
    }else{
      echo "Erro ao executar...";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p></p>
Clique<a href="#"> aqui</a> para usar o site
  </body>
</html>
