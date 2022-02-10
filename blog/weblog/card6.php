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
    <img src="07.jpg"  width="300rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">Biografia</h5> <br> <br>
      <p class="card-text">Seu nome de batismo é Charlie Christofer Parker Jr., mas ficou mundialmente famoso como Charlie Parker. Nasceu na cidade de Kansas City, no dia 29 de agosto de 1920. Foi um saxofonista e compositor estadunidense de jazz. Inicialmente, seu apelido era Yardbird, mas, em seguida, começaram a chamá-lo apenas de Bird. Na história do jazz, Parker é tido como um dos melhores intérpretes de saxofone alto, e peça fundamental para a evolução deste estilo musical. <br> <br> 
        Filho único de Charles e Addie Parker, Bird, aos 13 anos, ingressou no Lincoln College, onde teve seu primeiro contato com a música. Na banda do colégio, começou a tocar tuba, mas sua mãe achou que não seria um instrumento adequado e, com suas economias, comprou um saxofone alto. Parker, autodidata, começou imitando os grandes saxofonistas de Kansas City, como Bem Webster e, principalmente, Lester Young. Em 1935, com apenas 15 anos, já tocava profissionalmente e era cadastrado no Local 627, sindicato dos músicos de Kansas. Tinha acabado de se casar, ia ser pai, e já havia experimentado todo tipo de droga. <br> <br>
        Junto com Thelonius Monk, Dizzie Gillespie, Bud Powell e outros, Parker ajudou a desenvolver o bebop, um estilo de jazz nascido na década de 1940 e baseado na improvisação de uma melodia, modificando os acordes, criando, desta forma, novas variações sobre as estruturas musicais. <br> <br>
        Em 1939, Charlie Parker chegou, pela primeira, vez a Nova York, onde foi lavador de pratos em um clube. Sua primeira gravação, em 1940, foi com Jay McShann, onde criou solos de destaque e apresentou novas ideias musicais. Foi nesse mesmo ano que Parker tocou pela primeira vez com o trompetista Dizzie Gillespie e, ao final de 1944, começaram a tocar juntos, foi em função desta parceria (futuramente conhecida como Bird & Diz) que Parker entrou definitivamente para o mundo do jazz, posto que seus solos eram absolutamente inovadores para um público acostumado com musicas de estilo mais convencional como, por exemplo, as tocadas por grandes bandas como a de Glenn Miller. É nesta época que Parker toca com mestria músicas como Salt Peanuts, Groovin’ High e Dizzie Atmosphere, Shaw Nuff, entre outras. <br> <br>
        Contando com somente 25 anos de idade, Parker era o jazzista mais admirado por seu colegas, nesta época, vivia em uma fase de grande criatividade musical e excessos de todo tipo: comia muito, bebia doses gigantescas de álcool, injetava morfina e heroína sem a menor moderação e, claro, muitas mulheres, aliás, qualquer que quisesse ir pra cama com ele. <br> <br> 
        Em 1946, graças à toxicodependência, Parker teve um AVC (Acidente Vascular Cerebral), fato que o manteve afastado durante seis meses. No início do ano seguinte, voltou a Nova York, onde forma seu próprio quinteto (integrado, aliás, por Miles Davis). Também se apresentou com seu quinteto e a orquestra de Dizzie Gillespie no Carnegie Hall. Parker manteve-se muito ativo entre 1947 e 1951, época em que também se apresentou em palcos europeus. <br> <br> 
        Mesmo com seus problemas com as drogas terem se agravado, ainda era capaz de tocar majestosamente, como ficou demonstrado no concerto de Massey Hall no Canadá, em 1953. <br> <br>
        No ano seguinte, em razão da falta de dinheiro, o músico não pôde ajudar no tratamento de sua filha, que morreu em decorrência de pneumonia. Em seguida, Parker tentou duas vezes o suicídio, mas veio a falecer, em 1955, em razão de um colapso cardiovascular ocorrido na residência de sua amiga a baronesa Pannonica Koenigswater. <br> <br>
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