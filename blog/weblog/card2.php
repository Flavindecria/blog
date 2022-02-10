<?php
include "insertcomment.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css"> 
    <title>Morte - Charlie Parker</title>
</head>
<!--nav-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="wbg.html">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">POEMAS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">REFLEXÕES</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">PALAVRAS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">SOBRE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">CONTATO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Assuntos" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
  <br> <br>
<body>
  <!--tabela-->
  <div class="card mb-5 col-10 gap-3 justify-content-center container-fluid">
    <img src="03.jpeg"  width="300rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">Morte</h5>
      <p class="card-text">Durante sua vida, Parker foi usuário de álcool, maconha e, sobretudo, heroína desde os dezesseis anos.[1] Sofrendo de problemas de saúde relacionados ao coração e à úlcera crônica, Parker justificava seu consumo como uma fonte de alívio da dor física causada por tais complicações. <br> <br>
        Em agosto de 1954, movido pelo luto causado pela morte prematura de sua filha de 2 anos, que sofria de fibrose cística e problemas cardíacos congênitos, Charlie Parker tentou o suicídio pela ingestão de medicamentos. Entretanto, foi socorrido a tempo pela esposa, sendo em seguida internado para desintoxicação até outubro de 1954. <br> <br>
        Faleceu em 12 de março de 1955, acometido por um ataque cardíaco enquanto assistia a uma apresentação de jazz na televisão.[3] Encontra-se sepultado no Cemitério Lincoln, Kansas City, Missouri nos Estados Unidos. <br> <br>
      </p>
      <form name="commentform" method="post" action="insertcomment.php">
        Nome: <input type="text" name="nome" style="width: 284px; height: 25px;"> <br> <br>
        E-mail: <input type="text" name="email" style="width: 284px; height: 25px;"> <br> <br>
        Comentário: <textarea name="comentario" style="width: 280px; height: 120px;" ></textarea> <br> <br>
        <input type="submit" name="submit" value="Enviar" style="width: 130px; height: 30px;">
      </form>
    </div>
  </div>

  <?php

  
  $sql =  mysqli_query($con, "SELECT * FROM comentarios_tb"); 
  $row = mysqli_num_rows($sql);
  if ($row > 0) {
    while ($linha = mysqli_fetch_array($sql)) {
      $nome = $linha['nome'];
      $email = $linha['email'];
      $comentario = $linha['comentario'];
      echo $nome;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $comentario;
      echo "<br>";


    }
  }  else {
    echo "Ainda não Existem Comentários, Seja o Primeiro a Comentar";
  }

  ?>
    </div>
  </div>
</body>
</html>