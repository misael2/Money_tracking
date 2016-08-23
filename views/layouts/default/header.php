<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
	  <title>Sistema de Gestión</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>materialize.css" media="screen,projection" charset="utf-8">
     <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>style.css" media="screen,projection" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

 <ul id="dropdown11" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>users/add"><i class="material-icons right">add</i>Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>users">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown22" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>accounts/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>accounts">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown33" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>transactions/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>transactions">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown44" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>categories/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>categories">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown1" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>users/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>users">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown2" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>accounts/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>accounts">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown3" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>transactions/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>transactions">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown4" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>categories/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>categories">Mostar<i class="material-icons right">view_list</i></a></li>
 </ul>
 <ul id="dropdown5" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>users/logout">Logout</a></li>
   
 </ul>
 <nav class="purple darken-3 lighten-2 z-depth-2" role="navigation">
   <div class="nav-wrapper container">
     <a id="logo-container" href="<?php echo APP_URL; ?>pages" class="brand-logo">App</a>
     <ul class="right hide-on-med-and-down">
       <li><?php if (isset($_SESSION['username'])): ?>Bienvenido <?php echo $_SESSION['username']; ?>!  <?php endif; ?></li>
       <li><a class="dropdown-button"  data-activates="dropdown1">Usuarios<i class="material-icons right">arrow_drop_down</i></a></li>
       <li><a class="dropdown-button"  data-activates="dropdown2">Cuentas<i class="material-icons right">arrow_drop_down</i></a></li>
       <li><a class="dropdown-button"  data-activates="dropdown3">Transacciones<i class="material-icons right">arrow_drop_down</i></a></li>
       <li><a class="dropdown-button"  data-activates="dropdown4">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
   <li><a href="" class="dropdown-button"  data-activates="dropdown5">Cierra sesión<i class="material-icons right">vpn_key</i></a></li>
     </ul>

     <ul id="nav-mobile" class="side-nav">

            <li><div class="userView">
      <img class="background" src="https://scontent.fmid1-1.fna.fbcdn.net/v/t1.0-9/13892215_638125383012942_3098298886429587276_n.jpg?oh=fc54c8c8996fbb89d9238ec209c1b7ca&oe=583FEFCA">
      <a href="#!user"><img class="circle" src="https://scontent.fmid1-1.fna.fbcdn.net/v/t1.0-9/11196327_451580088334140_2366996134782054232_n.jpg?oh=a7f338e797765511a5beb223a09d13ef&oe=58585E65"></a>
      <a href="#!name"><span class="black-text"><?php if (isset($_SESSION['username'])): ?>Hola <?php echo $_SESSION['username']; ?>!  <?php endif; ?></span></a>
    </div></li>
       <li><a class="dropdown-button"  data-activates="dropdown11">Usuarios</a></li>
       <li><a class="dropdown-button"  data-activates="dropdown22">Cuentas</a></li>
       <li><a class="dropdown-button" data-activates="dropdown33">Transacciones</a></li>
       <li><a class="dropdown-button"  data-activates="dropdown44">Categorias</a></li>
   <li><a href="<?php echo APP_URL; ?>users/logout">Cierra sesión<i class="material-icons right">vpn_key</i></a></li>
     </ul>
     <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
   </div>
 </nav>
    <div class="container">
      <?php if (isset($_SESSION['username'])): ?>Bienvenido <?php echo $_SESSION['username']; ?>!  <?php endif; ?>
