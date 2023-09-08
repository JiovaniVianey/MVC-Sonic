<!DOCTYPE html>
<html lang="fr">
<?php
$baseRoute = $_SERVER['BASE_URI'];
?>

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- CSS personnel-->
  <link rel="stylesheet" href="<?= $absoluteURL ?>/fonts/specimen_files/specimen_stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="<?= $absoluteURL ?>/css/style.css" />
  <!-- font awesome-->
  <script src="https://kit.fontawesome.com/731cc9a451.js" crossorigin="anonymous"></script>
  <title>Sonic the Hedgehog</title>
  <link rel="shorcut icon" href="<?= $absoluteURL ?>/favicon.ico" type="image/x-icon">
</head>

<body data-spy="scroll" data-target="#menu">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark blue sticky-top main-nav">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100">
          <ul class="nav navbar-nav w-100">
            <li class="nav-item">
              <a class="nav-link" href="<?= $router->generate('home') ?>">Accueil</a>
            </li>
          </ul>
        </div>
        <a class="navbar-brand order-first order-md-0 mx-0" href="index.html">
          <img id="imgcont" src="<?= $absoluteURL ?>/assets/images/logo_site.png" />
        </a>
        <div class="collapse navbar-collapse w-100 justify-content-end">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= $router->generate('creators') ?>">Créateurs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>