<?php include "connection.php" ?>
<?php include "insertcomment.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css"> 
    <title>Biografia - Charlie Parker</title>
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
    <img src="02.jpg"  width="300rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">Biografia</h5>
      <p class="card-text">Parker é comumente considerado um dos melhores músicos de jazz. Em termos de influência e impacto, sua contribuição foi tão significativa que Charles Mingus comentou que se Bird fosse vivo hoje, ele poderia pensar que estava vivendo em uma parede de espelhos. O talento de Bird é comparado, quase sem argumentos, com músicos lendários tais como Louis Armstrong e Duke Ellington. Sua reputação como um dos melhores saxofonistas é tal que alguns críticos dizem que ele é insuperável; o crítico de jazz Scott Yanow fala por muitos fãs do jazz e músicos, quando sugere que "Parker foi indubitavelmente o melhor saxofonista de todos os tempos." <br> <br> 
        Figura fundadora do bebop, a forma inovadora de Parker para melodia, ritmo e harmonia tem exercido uma incalculável influência no jazz. Varias canções de Parker tornaram-se standards do repertório do jazz, e inúmeros músicos têm estudado a música de Parker e absorvido elementos do seu estilo. <br>   <br>
        Parker tornou-se um ícone para a geração do Beat, e foi uma figura-chave no desenvolvimento conceptivo do jazz como um artista descompromissado e intelectual, ao invés de apenas um entretenedor popular. Por várias vezes, Parker fundiu o jazz com outros estilos musicais, do clássico (buscando estudar com Edgard Varese e Stefan Wolpe) à música latina (gravando com Machito), abrindo um caminho seguido mais tarde por outros. <br> <br>
        Consumido pelo álcool e pelas drogas, Parker teve uma existência breve e trágica, que inspirou criadores como o escritor argentino Julio Cortázar (que se inspirou nele para delinear o personagem central do conto "O Perseguidor") e o cineasta Clint Eastwood (que recebeu seu primeiro Globo de Ouro com o filme "Bird", de 1988, estrelado por Forest Whitaker, o qual, por sua vez, levou o prêmio de melhor ator no Festival de Cannes graças a este trabalho). <br> <br>
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

</body>
</html>