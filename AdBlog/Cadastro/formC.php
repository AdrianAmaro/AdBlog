<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>cadastro</title>
  </head>
  <body id="bazinga">
    <div class="container-fluid">

      <div class="col-md-255 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="#">cadastro</a>
        </nav>
      </div>

      <?php
      if (isset($usuario)) {
       $acao="atualiza_usuario.php?id=".$usuario["id"];
      }else {
       $acao = "Cadastro.php";
      }

      ?>



    <form  action=<?= $acao;?> method="post">
    <div class="col-md-4 mb-3">
    <label>E-mail</label>
      <input name="email" type="text" placeholder="Digite seu E-mail" required>

    </div>

    <div class="col-md-4 mb-3">
      <label>Senha</label>
      <input name="senha" type="password" placeholder="digite sua Senha" minlength="8" maxlength="12" required>
    </div>

    <div class="col-md-4 mb-3">
      <label>Confirmar Senha</label>
      <input name="senha2" type="password" placeholder="digite sua Senha" minlength="8" maxlength="12" required>
    </div>

    <div class="col-md-4 mb-3">
      <label>Apelido</label>
      <input name="apelido" type="text" placeholder="Insira seu peso" required>
    </div>

    <input  class="btn btn-primary" type="submit" name="Enviar">
  </div>

</form>





  </body>
</html>
