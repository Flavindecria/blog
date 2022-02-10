<?php include "connection.php" ?> 

<?php
if(isset($_POST['nome'], $_POST['email'], $_POST['comentario'])) {
$nome = $_POST['nome'];
$email = $_POST ['email'];
$comentario = $_POST['comentario'];

$insert = "INSERT INTO comentarios_tb(nome, email, comentario)
VALUES ('$nome', '$email', '$comentario')";
$query = mysqli_query($con, $insert); 
echo "<center><h1>Obrigado, seu comentário foi enviado!</h1></center>";
}
?>