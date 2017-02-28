<?php 

// Parametros a configurar para la conexion de la base de datos 

$hotsdb ="mysql.hostinger.es";    // sera el valor de nuestra BD 
$basededatos = "u744484237_base1";    // sera el valor de nuestra BD 

$usuariodb = "u744484237_cris";    // sera el valor de nuestra BD 
$clavedb = "trabajocris";    // sera el valor de nuestra BD 

$tabla_db1 = "usuarios";    // sera el valor de una tabla 
$tabla_db2 = "otratabla";    // sera el valor de otra tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysqli_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysqli_select_db($conexion_db,"$basededatos") 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 


