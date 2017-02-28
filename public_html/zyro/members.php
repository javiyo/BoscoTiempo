<?php
session_start();
if(!isset($_SESSION["session_username"])){
echo '<script type="text/javascript">
alert("No estas conectado");
window.location.assign("3.php");
</script>';}
else{
echo 'Bienvenido';
<a href = "oferta/">;}
?>	
