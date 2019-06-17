<?php
if (isset($_POST['botao'])) {

$nome = mysqli_real_escape_string($db, $_POST['texto']);


include_once "conexao.php";

    $mal = array ('nome'=>$_POST['nome']);


$sql = "INSERT INTO mal (nome) VALUES(:nome);";
        $query = $con->prepare($sql);
        $r  = $query->execute($mal);
        if ($r==true) {
          header('Location: asuatabela.php');
        }else{
          echo "Algo deu errado...";
        }

  }
 ?>
