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
    <title>Principais Músicas - Charlie Parker</title>
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
    <img src="05.jpg"  width="300rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">Principais Músicas</h5> <br> <br>
      <p class="card-text" style="text-align: center;">1. Summertime <br>
        2. Scrapple from the Apple <br>
        3. Donna Lee <br>
        4. All the Things You Are <br>
        5. April In Paris <br>
        6. Just Friends <br>
        7. Ko Ko <br>
        8. Ornithology <br>
        9. Out Of Nowhere <br>
        10. Yardbird Suite <br> <br> 
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