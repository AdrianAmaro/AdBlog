<?php
  include_once "../conexao.php";


$acao = $_GET['acao'];
if($acao=="postar") {
  $registro = $_POST;
  $sql = "INSERT INTO post(texto)
            VALUES(:texto);";
  $query = $con->prepare($sql);
  $r = $query->execute($registro);
   if($r==true){
     echo "Dados cadastrados com sucesso";
   }else{
      echo "Erro ao executar...";
   }
    require_once('../cabecalho.php');
    require('post.php');
    require_once('../rodape.php');
}
?>
