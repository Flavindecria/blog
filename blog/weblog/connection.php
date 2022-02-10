<?php
$host = "localhost";
$user = "root";
$pass= "";
$banco = "comentarios";

$con = mysqli_connect($host, $user, $pass, $banco);


$men = mysqli_select_db($con, $banco);

 
?>
