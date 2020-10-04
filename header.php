<?php 
session_start(); 
require "vendor/autoload.php";

echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>                 
    <script src='node_modules/jquery/dist/jquery.min.js'></script>
    <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
    <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
    <link rel='stylesheet' href='styles.css' type='text/css'>    
    <script src='javascript.js'></script>
_INIT;
  require_once 'functions.php';  
  $userstr = "Bienvenido"; 
  if (isset($_SESSION['user'])) { 
	$user     = $_SESSION['user']; 
	$loggedin = TRUE;              
	$userstr  = "Logged in as: $user";
  }
  else $loggedin = FALSE; 

 echo <<<_MAIN
 
     <title> Club deportivo Manaties</title>
   </head>
   <body>
     <div data-role='page' id='fondo'>
          <div data-role='header'> 
            <nav class=" fixed-top  navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li>
              <a href="Index.php?view=$userstr"><img src="ImagenesClub/logo1.png" width="10"></a>
              </li>
                <li class="nav-item active">
                  <a class="nav-link" href="Index.php?view=$userstr" data-transition="slide" >Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fotografia.php?view=$userstr" data-transition="slide">Fotografias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="informacion.php?view=$userstr" data-transition="slide">informacion</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Merch.php?view=$userstr" data-transition="slide">Mercancia</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="Subs.php?view=$userstr" data-transition="slide">Unete al equipo!</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php?view=$userstr" data-transition="slide">Cerrar sesión</a>
          </li>
    </ul> 
  </div>
</nav>
<br><br>
         <div class='username'>$userstr</div>
        </div>
        <div data-role='content'>
        <div id='logo' class='center'>Club Deportivo de Basketball Manaties</div>
        <center><img src='ImagenesClub/logo1.png'
         width="700" height="300">
        </center>
_MAIN;
  if($loggedin) {
echo <<<_LOGGEDIN
   <center> <h1 class="text"> ¡Manaties de Chetumal! <br> !Los reyes de la bahia! </h1> </center>
_LOGGEDIN;
  }
  else { 
echo <<<_GUEST
        <div class="center" class="content-light-blue">
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Sign Up</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Log In</a>
        </div>
        <center><p class='text'>Si deseas comprar deberas registrarte.</p></center>
_GUEST;
  }
?>