<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="<?= $acao; ?>" method="post">
      <div class="form-group">
        <label for="text">Melhorias</label>

      </div>
    </form>
    <div class="input-group">
      <textarea name="texto" rows="5" cols="100" maxlength="500" value="<?php if(isset($registro))
                     echo $registro['descricao'];?>"></textarea>
    	  <button type="submit" class="btn" name="botao">Botao</button>
    	</div>
  </body>
</html>
<?php
if (isset($_POST['botao'])) {

$nome = mysqli_real_escape_string($db, $_POST['texto']);


include_once "conexao.php";

    $mal = array ('texto'=>$_POST['texto']);


$sql = "INSERT INTO post (texto) VALUES(:texto);";
        $query = $con->prepare($sql);
        $r  = $query->execute($mal);
        if ($r==true) {
          header('Location: asuatabela.php');
        }else{
          echo "Algo deu errado...";
        }

  }
 ?>
