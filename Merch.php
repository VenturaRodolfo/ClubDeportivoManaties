<?php
require_once 'header.php';
echo
'<div class="card-deck">
<div class="card">
  <img src="imagenesClub/green.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Camisa con logo del Club de Manaties<br>Masculina</h5>
    <p class="card-text">$150</p>
    <a href="compra.php" class="card-link">view</a>';
    if (!$loggedin){
    echo' ';
}
else{
    echo' <form method="POST" action="compra.php">
        <input type="hidden" name="variable1" value="PlayeraMasculinoManaties" />
        <input type="hidden" name="DES" value="SI" />
        <input type="hidden" name="Precio" value="150" />
       <button type="submit"><a href="compra.php">Buy</a></button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la talla</label>
       <select name="talla" required>
         <option value="EXCH">EXCH</option>
         <option value="CH">CH</option>
         <option value="M">M</option>
         <option value="G">G</option>
         <option value="EXG">EXG</option>
       </select>
       </div>
        </form>';
}
echo '</div>
</div>
<br>
<div class="card">
  <img src="imagenesClub/green2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Camisa con logo del Club de Manaties<br>Femenina</h5>
    <p class="card-text">$150</p>
    <a href="imagenesClub/green2.jpeg" class="card-link">view</a>';
    if (!$loggedin){
        echo' ';
    }
    else{
        echo' <form method="POST" action="compra.php">
        <input type="hidden" name="variable1" value="PlayeraFemeninoManaties" />
        <input type="hidden" name="DES" value="SI" />
        <input type="hidden" name="Precio" value="150" />
       <button type="submit"><a href="compra.php">Buy</a></button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la talla</label>
       <select name="talla" required>
         <option value="EXCH">EXCH</option>
         <option value="CH">CH</option>
         <option value="M">M</option>
         <option value="G">G</option>
         <option value="EXG">EXG</option>
       </select>
       </div>
        </form>';    }
    echo '</div>
</div>
<br>
<div class="card">
  <img src="imagenesClub/balon.jpeg"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Balon medida 7 con el logo del club!</h5>
    <p class="card-text">$300</p>
    <a href="imagenesClub/balon.jpeg" class="card-link">view</a>';
    if (!$loggedin){
        echo' ';
    }
    else{
        echo' <form method="POST" action="compra.php">
        <input type="hidden" name="variable1" value="Balon" />
        <input type="hidden" name="DES" value="NO" />
        <input type="hidden" name="Precio" value="300" />
       <button type="submit"><a href="compra.php">Buy</a></button>
        </form>';    
    }
    echo '</div>
</div>
</div>
<br><br><br>';

echo
'<div class="card-deck">
<div class="card">
  <img src="imagenesClub/codera.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Codera</h5>
    <p class="card-text">$250 c/u</p>
    <a href="imagenesClub/codera.jpg" class="card-link">view</a>';
    if (!$loggedin){
    echo' ';
}
else{
    echo' <form method="POST" action="compra.php">
        <input type="hidden" name="variable1" value="Codera" />
        <input type="hidden" name="DES" value="SI" />
        <input type="hidden" name="Precio" value="250" />
       <button type="submit"><a href="compra.php">Buy</a></button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la talla</label>
       <select name="talla" required>
         <option value="EXCH">EXCH</option>
         <option value="CH">CH</option>
         <option value="M">M</option>
         <option value="G">G</option>
         <option value="EXG">EXG</option>
       </select>
       </div>
        </form>';}
echo '</div>
</div>
<br>
<div class="card">
  <img src="imagenesClub/rodillera.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rodillera</h5>
    <p class="card-text">$250 c/u</p>
    <a href="imagenesClub/rodillera.jpg" class="card-link">view</a>';
    if (!$loggedin){
        echo' ';
    }
    else{
        echo' <form method="POST" action="compra.php">
        <input type="hidden" name="variable1" value="Rodillera" />
        <input type="hidden" name="DES" value="SI" />
        <input type="hidden" name="Precio" value="250" />
       <button type="submit"><a href="compra.php">Buy</a></button>
       <div class="col-md-6 mb-6">
<label for="exampleFormControlSelect1" class="text"> Eliga la talla</label>
<select name="talla" required>
  <option value="EXCH">EXCH</option>
  <option value="CH">CH</option>
  <option value="M">M</option>
  <option value="G">G</option>
  <option value="EXG">EXG</option>
</select>
</div>
        </form>';    }
    echo '</div>
</div>
<br>
<div class="card">
  <img src="imagenesClub/gorra.jpeg"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gorra con el logo del equipo</h5>
    <p class="card-text">$300</p>
    <a href="imagenesClub/gorra.jpeg" class="card-link">view</a>';
    if (!$loggedin){
        echo' ';
    }
    else{
        echo' <form method="POST" action="compra.php">
        <input type="hidden" name="variable1" value="Gorra" />
        <input type="hidden" name="DES" value="SI" />
        <input type="hidden" name="Precio" value="300" />
       <button type="submit"><a href="compra.php">Buy</a></button>
        </form>';    }
    echo '</div>';





?>