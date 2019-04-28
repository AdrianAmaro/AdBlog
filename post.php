<?php require_once "../cabecalho.php"; ?>
<div class="container">
  <p>Post</p>
  <?php
   $acao = "enviar.php";
  ?>
  <form class="<?= $acao;?>" method="post">
    <textarea name="texto" rows="5" cols="100" maxlength="500"></textarea>

    <input class="btn btn-primary" type="submit" name="Postar">
  </form>

</div>
<?php require_once "../rodape.php"; ?>
