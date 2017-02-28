<?php
require("constants.php");

$con = mysqli_connect("mysql.hostinger.es","u744484237_cris","trabajocris") or die(mysql_error());
	mysqli_select_db($con,"u744484237_base1") or die("Cannot select DB");
	
	?>