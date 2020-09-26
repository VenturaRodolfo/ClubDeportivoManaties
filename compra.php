<?php
require_once 'header.php';
error_reporting(E_ERROR | E_PARSE);
$Pedido = $_POST["variable1"];
$Precio = $_POST["Precio"];
$talla = $_POST['talla'];
echo '<form method="POST">
<h2 for="validationCustom03" class="text" >¿Confirmar compra?</h2>
<button class="btn btn-primary" type="submit">Confirmar</button>
</form>
';
if(isset($_POST['variable1']) && !empty($_POST['variable1']) &&
isset($_POST['Precio']) && !empty($_POST['Precio'])) 
{
queryMysql("INSERT INTO ventamerch (pedido, talla,  precio)
 VALUES ('$Pedido', '$talla',  '$Precio')");  

}
else{
    echo '<h1>Algo paso, regrese a Merch:(</h1>';
}

?>