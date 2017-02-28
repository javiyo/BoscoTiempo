<?php
session_start();
?>

<?php require_once __DIR__.'/conexion.php';?>
<?php include_once __DIR__.'/header.php'; ?>

<?php
if(isset($_COOKIE['93.188.160.107'])) 
{


echo '<script type="text/javascript">
alert("Ya estas conectado");
window.location.assign("members.php");
</script>';}

else{

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn = mysqli_connect("mysql.hostinger.es","u744484237_cris","trabajocris","u744484237_base1");
    $sql = 'SELECT * FROM usuarios';
    $query =mysqli_query($conn, $sql);

    $numrows=mysqli_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {


    $_SESSION['session_username']=$username;

    /* Redirect browser */
    echo '<script type="text/javascript">
    alert("Bienvenido");
    window.location.assign("members.php");
    </script>';}
    
    } else {

 $message =  "Nombre de usuario o clave invalidos";
    }

} else {
    $message = "Debes rellenar todos los campos";
}
}
?>




    <div class="container mlogin">
            <div id="login">
    <h1>Logueo</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">Nombre De Usuario<br />
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Clave<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Entrar" />
    </p>
       
</form>

    </div>

    </div>

	

			
			