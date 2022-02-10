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
    <title>Discografia - Charlie Parker</title>
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
    <img src="06.jpg"  width="300rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">Discografia</h5>
      <p class="card-text" style="text-align: center;"> <h6 style="text-align: center;">Savoy</h6> <br>
        1944 <br>
        
        O Imortal Charlie Parker <br>
        Pássaro: Mestre leva <br>
        Encores <br>
        1945 <br>
        
        Dizzy Gillespie - Groovin' High <br>
        O Gênio de Charlie Parker <br>
        A história de Charlie Parker <br>
        Charlie Parker Memorial, vol. 2 <br>
        1947 <br>
        
        Charlie Parker Memorial, vol. 1 <br>
        1948 <br>
        
        Pássaro no Poleiro, Vol. 1 <br>
        Lados recém-descobertos por Charlie Parker <br>
        O 'Pássaro' Retorna <br>
        1949 <br> <br>
        
        Pássaro no Poleiro, Vol. 2 <br>
        pássaro no poleiro <br>
        1950 <br> <br> 
        
        Uma noite em casa com o sexteto de Charlie Parker <br> <br>
        <h6 style="text-align: center">Discar</h6> <br> <br>
        1945 <br>
        
        A fabulosa Jam Session de Red Norvo <br>
        1946 <br> <br>
        
        Mestres Alternativos, Vol. 2 <br>
        1947 <br> <br>
        
        O pássaro sopra o blues <br>
        Cool Blues c/w Bird's Nest <br>
        Mestres Alternativos, Vol. 1 <br>
        Crazeology c/w Crazeology, II: 3 maneiras de tocar um refrão <br>
        Charlie Parker, v. 4 <br> <br>
       <h6 style="text-align:center">Verve</h6> <br> <br>
        1946 <br>
        
        Jazz na Filarmônica, Vol. 2 <br>
        Jazz na Filarmônica, Vol. 4 <br>
        1948 <br><br>
        
        Vários Artistas - Potpourri Of Jazz <br>
        A história de Charlie Parker, nº 1 <br>
        1949 <br><br>
        
        O Gênio de Charlie Parker, #7 - Jazz Perene <br>
        Jazz na Filarmônica, Vol. 7 <br>
        Jazz At The Philharmonic - O Conjunto de Ella Fitzgerald <br>
        O Completo Charlie Parker On Verve - Bird <br>
        1950 <br>
        
        The Genius Of Charlie Parker, #4 - Bird And Diz (lançado na gravadora subsidiária da Verve, Clef) <br>
        A história de Charlie Parker, #3 <br>
        1951 <br> <br>
        
        O Gênio de Charlie Parker, #8 - Schnapps Sueco <br>
        O Gênio de Charlie Parker, #6 - Fiesta <br>
        1952 <br> <br>
        
        O gênio de Charlie Parker, #3 - Agora é a hora <br>
        1953 <br> <br> 
        
        O Quarteto de Charlie Parker <br>
        1954<br><br>
        
        The Genius Of Charlie Parker, #5 - Charlie Parker interpreta Cole Porter (lançado postumamente) <br>
        1957 <br> <br>
        
        The Genius Of Charlie Parker, #1 - noite e dia - Verve MGV-8003- mono (lançado postumamente) <br>
       <h6 style="text-align: center;">Compilações</h6> <br> <br>
        1940 <br> 
        
        Olhos de Pássaro, Vol. 1 (Filologia) <br>
        Charlie Parker com Jay McShann e sua orquestra - Early Bird (Stash) <br>
        Orquestra Jay McShann com Charlie Parker - Early Bird (Spotlight) <br>
        1941 <br><br>
        
        Jay McShann - The Early Bird Charlie Parker, 1941-1943: Jazz Heritage Series (MCA) <br>
        O Nascimento Completo do Bebop (Stash) <br>
        1943 <br><br>
        
        Nascimento do Bebop: Bird On Tenor 1943 (Stash) <br>
        1945 <br><br>
        
        Cada pedacinho dele 1945 (Spotlight) <br>
        Charlie Parker, v. 3 Young Bird 1945 (Mestres do Jazz) <br>
        Dizzy Gillespie - No Começo (Prestige) <br>
        Olhos de Pássaro, Vol. 17 (Filologia) <br>
        Charlie Parker On Dial, Vol. 5 (Destaque) <br>
        Fabulosa Jam Session de Red Norvo (Spotlight) <br>
        Dizzy Gillespie/Charlie Parker - Town Hall, Nova York, 22 de junho de 1945 ( Uptown Records ) <br>
        Olhos de Pássaro, Vol. 4 (Filologia) <br>
        Yardbird em Lotus Land (Spotlight) <br>
        1946 <br> <br>
        
        Rappin' With Bird (Meexa) <br>
        Jazz At The Philharmonic - How High The Moon (Mercúrio) <br>
        Charlie Parker On Dial, Vol. 1 (Destaque) <br>
        1947 <br><br>
        
        The Legendary Dial Masters, Vol. 2 (Estoque) <br>
        Vários artistas - Lullaby In Rhythm (Spotlight) <br>
        Charlie Parker On Dial, Vol. 2 (Destaque) <br>
        Charlie Parker On Dial, Vol. 3 (Destaque) <br>
        Charlie Parker On Dial, Vol. 4 (Destaque) <br>
        Vários Artistas - Antropologia (Spotlight) <br>
        Allen Eager - Na Terra de Oo-Bla-Dee 1947-1953 (Uptown) <br>
        Charlie Parker On Dial, Vol. 6 (Destaque) <br>
        Vários Artistas The Jazz Scene (Clef) <br>
        1948 <br><br>
        
        Gene Roland Band com Charlie Parker - A banda que nunca existiu (Spotlight) <br>
        Olhos de Pássaro, Vol. 6 (Filologia) <br>
        Bird on 52nd St. (Oficina de Jazz) <br>
        Charlie Parker (Prestigio) <br>
        Charlie Parker - Performances ao vivo (ESP) <br>
        Charlie Parker no ar, vol. 1 (Evereste) <br>
        1949 <br><br>
        
        Charlie Parker - Apresentações de Transmissão, Vol. 2 (ESP) <br>
        The Metronome All Stars - From Swing To Be-Bop (RCA Camden) <br>
        Jazz At The Philharmonic - JATP At Carnegie Hall 1949 (Pablo) <br>
        Rara Avis Avis, Rare Bird (Stash) <br>
        Vários Artistas - Alto Saxes (Norgran) <br>
        Pássaro na estrada (vitrine de jazz) <br>
        Charlie Parker/Dizzy Gillespie - Bird And Diz (Universal (Japão)) <br>
        Charlie Parker - Pássaro em Paris (Pássaro em Paris) <br>
        Charlie Parker na França 1949 (Jazz OP (França)) <br>
        Charlie Parker - Caixa de Pássaros, Vol. 2 (Jazz Up (Itália)) <br>
        Olhos de Pássaro, Vol. 5 (Filologia) <br>
        Charlie Parker com Cordas (Clef) <br>
        Olhos de Pássaro, Vol. 2 (Filologia) <br>
        Olhos de Pássaro, Vol. 3 (Filologia) <br>
        Dança dos infiéis (SCAM) <br>
        1950 <br><br>
        
        Charlie Parker Live Birdland 1950 (EPM Música (F) FDC 5710) <br>
        Charlie Parker - Bird at St. Nick's (Jazz Workshop JWS 500) <br>
        Charlie Parker no Apollo Theatre e na St. Nick's Arena (Zim ZM 1007) <br>
        Charlie Parker - Olhos de Pássaro, Vol. 15 (Filologia (It) W 845-2) <br>
        Charlie Parker - Fats Navarro - Bud Powell (Ozone 4) <br>
        Charlie Parker - Uma Noite na Terra dos Pássaros (Columbia JG 34808) <br>
        Charlie Parker - Bud Powell - Fats Navarro (Ozone 9) <br>
        Charlie Parker - Apenas amigos (SCAM JPG 4) <br>
        Charlie Parker - Apartamento Jam Sessions (Zim ZM 1006) <br>
        VA - Nosso Melhor (Clef MGC 639) <br>
        The Genius Of Charlie Parker, #4 - Bird And Diz (Verve MGV 8006) <br>
        O Persuasivamente Coerente Miles Davis (Alto AL 701) <br>
        Charlie Parker - Ultimate Bird 1949-50 (Gruta 495) <br>
        Charlie Parker - Ballads And Birdland (Klacto (E) MG 101) <br>
        Charlie Parker Big Band (Mercury MGC 609) <br>
        Charlie Parker - Cordas Parker Plus (Charlie Parker PLP 513) <br>
        Charlie Parker - Bird With Strings Live At The Apollo, Carnegie Hall e Birdland (Columbia JC 34832) <br>
        Charlie Parker - O pássaro que você nunca ouviu (Stash STCD 10) <br>
        Concerto de Jazz de Norman Granz (Norgran MGN 3501-2) <br>
        Charlie Parker no Pershing Ballroom Chicago 1950 (Zim ZM 1003) <br>
        A história de Charlie Parker, #3 (Verve MGV 8002) <br>
        Charlie Parker - Bird In Sweden (Spotlite (E) SPJ 124/25) <br>
        Charlie Parker - Mais não publicado, Vol. 2 (Royal Jazz (D) RJD 506) <br>
        Machito - Jazz Afro-Cubano (Clef MGC 689) <br>
        Uma noite em casa com Charlie Parker Sextet (Savoy MG 12152) <br>
        1951 <br><br>
        
        The Genius Of Charlie Parker, #8 - Schnapps Sueco (Verve MGV 8010) <br>
        O Magnífico Charlie Parker (Clef MGC 646) <br>
        O Gênio de Charlie Parker, #6 - Fiesta (Verve MGV 8008) <br>
        Charlie Parker - Reunião de Cúpula em Birdland (Columbia JC 34831) <br>
        Charlie Parker - Bird Meets Birks (Klacto (E) MG 102) <br>
        Charlie Parker - O "Pássaro Feliz" (Charlie Parker PLP 404) <br>
        Charlie Parker Live Boston, Filadélfia, Brooklyn 1951 (EPM Música (F) FDC 5711) <br>
        Charlie Parker - Bird With The Herd 1951 (Alamac QSR 2442) <br>
        Charlie Parker - Mais não publicado, Vol. 1 (Royal Jazz (D) RJD 505) <br>
        1952 <br><br>
        
        Charlie Parker - Novo Pássaro, Vol. 2 (Phoenix LP 12) <br>
        Charlie Parker/Sonny Criss/Chet Baker - Inglewood Jam 6-16-'52 (Jazz Chronicles JCS 102) <br>
        Jam Session de Norman Granz, #1 (Clef MGC 601) <br>
        Jam Session de Norman Granz, #2 (Clef MGC 602) <br>
        Charlie Parker ao vivo no Rockland Palace (Charlie Parker PLP 502) <br>
        Charlie Parker - Cheers (SCAM JPG 2) <br>
        O gênio de Charlie Parker, #3 - Agora é a hora (Verve MGV 8005) <br>
        1953 <br><br>
        
        Miles Davis - Collectors' Items (Prestige PRLP 7044, lançado postumamente em 1956) <br>
        Charlie Parker - Montreal 1953 (Uptown UP 27.36) <br>
        Charlie Parker/Miles Davis/Dizzy Gillespie - Bird With Miles And Dizzy (Queen Disc (It) Q-002) <br>
        Charlie Parker - One Night In Washington (Elektra/Musician E1 60019) <br>
        Charlie Parker - Yardbird-DC-53 (VGM 0009) <br>
        Charlie Parker em Storyville (Blue Note BT 85108) <br>
        Charlie Parker - Star Eyes (Klacto (E) MG 100) <br>
        Charles Mingus - The Complete Debut Recordings (Debut 12DCD 4402-2) <br>
        O Quinteto - Jazz At Massey Hall, Vol. 1 (estreia DLP 2) <br>
        The Quintet - Jazz At Massey Hall (estreia DEB 124) <br>
        Charlie Parker - Bird Meets Birks (Mark Gardner (E) MG 102) <br>
        Bud Powell - Transmissões de verão 1953 (ESP-Disk' ESP 3023) <br>
        Charlie Parker - New Bird: Hi Hat Broadcasts 1953 (Phoenix LP 10) <br>
        O Quarteto de Charlie Parker (Verve 825 671-2) <br>
        1954 <br><br>
        
        Hi-Hat All Stars, Artistas Convidados, Charlie Parker (Fresh Sound (Sp) FSR 303) <br>
        Charlie Parker - Kenton e Bird (Jazz Supreme JS 703) <br> 
        The Genius Of Charlie Parker, #5 - Charlie Parker interpreta Cole Porter (Verve MGV 8007) <br>
        Charlie Parker - Miles Davis - Lee Konitz (Ozone 2) <br>
        VA - Echoes Of An Era: The Birdland All Stars Live At Carnegie Hall (Roulette RE 127) <br>
        
       <h6 style="text-align: center;">Como acompanhante</h6> <br> <br>
        Com Dizzy Gillespie <br>
        
        The Complete RCA Victor Recordings (Bluebird, 1937-1949 [1995])</p> <br> <br>
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