<!DOCTYPE html>
<html>

  <head>
    <title><?php bloginfo("title"); ?></title>
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootstrap.min.css">
    <?php wp_head(); ?>
  </head>
  <body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">
    <img src="assets/images/logo-Effect-Shot.png" class="logo__navbar d-inline-block align-top" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="portafolio.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portafolio</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="fotografia.html">Fotografia</a>
          <a class="dropdown-item" href="marca.html">Marca</a>
          <a class="dropdown-item" href="web.html">Desarrollo Web</a>
        </div>
       </li>

      <li class="nav-item">
        <a class="nav-link" href="nosotros.html">Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.html">Contacto</a>
      </li>      
    </ul>
  </div>
</nav>
<!-- /Navbar -->

<!-- Header -->
<div class="img__header--jumbotron jumbotron jumbotron-fluid img-fluid display-4">
  <div class="container">
  <h2 class="titulo__header--jumbotron my-5 p-3 mb-2 text-white">Diseñamos tu negocio</h2>
  </div>
</div>
<!-- /Header -->