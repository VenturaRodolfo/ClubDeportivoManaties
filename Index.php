<?php
session_start();
require_once 'header.php';
//if (!$loggedin) die ("</div></body></html>");
echo <<<_EJEMPLO

<center><div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <center><img src="ImagenesClub/Manties.jpeg" class="d-block" width="1000" alt="img1"></center>
    <div class="carousel-caption d-none d-md-block">
      <h5>Fiesta de Wara</h5>
      <p>Fiesta de cumpleaños del dueño del equipo en conjunto con jugadores y padres.</p>
    </div>
  </div>
  <div class="carousel-item">
    <center><img src="ImagenesClub/peques.jpeg" class="d-block" width="1000" alt="img2"></center>
    <div class="carousel-caption d-none d-md-block">
      <h5>Copa Manati</h5>
      <p>Partido de los pequeños Manaties, la proxima generacion!.</p>
    </div>
  </div>
  <div class="carousel-item">
   <center> <img src="ImagenesClub/0304.jpeg" class="d-block" width="1000" alt="img3"></center>
    <div class="carousel-caption d-none d-md-block">
      <h5>Finales de segunda fuerza</h5>
      <p>Equipo de Manties 02-03 Campeones.</p>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div></center>
_EJEMPLO;
echo<<<_HOME
<br><br><center><h1 class="text">Este es el club deportivo de basketball Manaties de Chetumal</h1></center>
<br><br> <h2 class="text">Con apariciones en ligas como: </h2>
<br><br> <ul>
<li class="text"> <h2>Liga Mayor</h2></li>
<li class="text"><h2>Intermedia</h2></li>
<li class="text"><h2>Segunda Fuerza</h2></li>
<li class="text"><h2>Cadetes</h2></li>
<li class="text"><h2>Pasarela</h2></li>
</ul>
_HOME;
?>