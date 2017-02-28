<html>   

<head>   
<title>Registrarse</title>   
</head>   

<body>   

<form method="POST" action="registra.php">   

    <p>Usuario: <input type="text" name="username" size="20"></p>
    <p>Clave: <input type="text" name="password" size="20"></p>   
    <p>Reclave: <input type="text" name="repassword" size="20"></p>
    <p>E-mail: <input type="text" name="email" size="20"></p>   
    <p>Nombre: <input type="text" name="nombre" size="20"></p>
    <p>Apellido: <input type="text" name="apellido" size="20"></p>
    <p><input type="submit" value="Guardar datos" name="B1"></p>   
       
</form>   

</body>   

</html>   


<html> 

<head> 
<title>Guardamos los datos en la base de datos</title> 
<META name='robot' content='noindex, nofollow'> 
</head> 

<body> 
<?php 

// Recibimos por POST los datos procedentes del formulario 

$usuari = $_POST["username"]; 
$usuario = strip_tags($usuari);    // Eliminamos la etiquetas que puedan existir 
$n_usuario = strlen($usuario);      // Contamos el numero de caracteres 

$emai = $_POST["email"]; 
$email = strip_tags($emai);        // Eliminamos la etiquetas que puedan existir 
$n_email = strlen($email);         // Contamos el numero de caracteres 

$pass = $_POST["password"]; 
$password = strip_tags($pass);    // Eliminamos la etiquetas que puedan existir 
$n_password = strlen($password);      // Contamos el numero de caracteres 

$repass = $_POST["repassword"]; 
$repassword = strip_tags($repass);        // Eliminamos la etiquetas que puedan existir 
$n_repassword = strlen($repassword);         // Contamos el numero de caracteres 

$nomb = $_POST["nombre"]; 
$nombre = strip_tags($nomb);    // Eliminamos la etiquetas que puedan existir 
$n_nombre = strlen($nombre);      // Contamos el numero de caracteres 

$apellid = $_POST["apellido"]; 
$apellido = strip_tags($apellid);        // Eliminamos la etiquetas que puedan existir 
$n_apellido = strlen($apellido);         // Contamos el numero de caracteres 

$fecha = date("d-m-Y H:i"); 

$total_car = $n_usuario * $n_email *$n_password * $n_repassword * $n_nombre * $n_apellido;    // Si alguno de ellos vale 0, $total_car valdrá 0

if ($password != $repassword){
echo "Clave y reclave no coinciden. Vuelva a introducirlas.";
} 
else{
if ($total_car >= 1)  
{  
    // Abrimos la conexion a la base de datos 
    include("abre_conexion.php"); 
     
    $_GRABAR_SQL = "INSERT INTO $tabla_db1 (username,email,password,repassword,nombre,apellido,fecha) VALUES ('$usuario','$email','$password','$repassword','$nombre','$apellido','$fecha')"; 
    $conn = mysqli_connect("mysql.hostinger.es","u744484237_cris","trabajocris","u744484237_base1"); 
    mysqli_query($conn,$_GRABAR_SQL); 
     
  
     
    // Confirmamos que el registro ha sido insertado con exito 
     
    echo " 
    <p>Los datos han sido guardados con exito.</p> 
     ";
    
} 
else 
{ 
    echo "; Los campos no pueden estar vacios.<br /> 
    <a href=\"javascript:history.go(-1)\">Volver</a> 
    "; 
} ;}
?> 
</body> 

</html> 