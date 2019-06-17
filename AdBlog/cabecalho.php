<?php
 //ATENÇÃO, ALTERAR CASO A APLICAÇÃO MUDE DE LOCAL
 //OU DE NOME DE PASTA
  define('BASE_URL', 'http://localhost/AdBlog/');
?>

<!doctype html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Template Admin">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Dashboard Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">

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
    <link href="<?= BASE_URL; ?>dashboard.css" rel="stylesheet">
  </head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ADBlog</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= BASE_URL.'login.php?acao=logout';?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!--menu início -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?= BASE_URL; ?>">
                  <span data-feather="home"></span>
                  Home <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post/enviar.php?acao=postar">
                <span data-feather="twitter"></span>
                Posts
              </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                href="<?= BASE_URL;?>">
                  <span data-feather="file"></span>
                  Perfis
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- fim do menu -->

        <!--Quadro principal-->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
