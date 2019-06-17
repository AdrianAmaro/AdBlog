<?php
session_start();

$apelido = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'adblog');

if (isset($_POST['reg_user'])) {

  $apelido = mysqli_real_escape_string($db, $_POST['apelido']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($apelido)) { array_push($errors, "Requer Apelido"); }
  if (empty($email)) { array_push($errors, "Requer Email"); }
  if (empty($password_1)) { array_push($errors, "Requer Senha"); }
  if ($password_1 != $password_2) {
	array_push($errors, "As duas senhas precisam ser iguais");
  }


  $user_check_query = "SELECT * FROM usuario WHERE apelido='$apelido' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['apelido'] === $apelido) {
      array_push($errors, "Apelido já existe");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email já está sendo usado");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO usuario (apelido, email, senha)
  			  VALUES('$apelido', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['apelido'] = $apelido;
  	$_SESSION['success'] = "Agora você entrou";
  	header('location: index.php');
  }
}

if (isset($_POST['login_user'])) {
  $apelido = mysqli_real_escape_string($db, $_POST['apelido']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($apelido)) {
  	array_push($errors, "Requer Usuário");
  }
  if (empty($password)) {
  	array_push($errors, "Requer Senha");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM usuario WHERE apelido='$apelido' AND senha='$password';";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['apelido'] = $apelido;
  	  $_SESSION['success'] = "Você entrou";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "O usuário ou a senha estão errados");
  	}
  }
}

?>
