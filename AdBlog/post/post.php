
<div class="container">
  <p>Post</p>

  <form class="<?= $acao;?>" method="post">
    <textarea name="texto" maxlength="500" ></textarea>

    <input class="btn btn-primary" type="submit" name="Postar">
  </form>
  <a class="btn btn-success btn-lg"
    href="<?= BASE_URL.'index.php';?>">
    Voltar
  </a>
</div>
