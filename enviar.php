<?php
  include_once "../conexao.php";

  $usuario= array('texto'=>$_POST['texto'],
                 );



  $sql = "INSERT INTO usuario (texto)
            VALUES(:texto );";
  $query = $con->prepare($sql);
  $r = $query->execute($usuario);
    if($r==true){
      echo "Dados cadastrados com sucesso";
    }else{
      echo "Erro ao executar...";
    }
?>
