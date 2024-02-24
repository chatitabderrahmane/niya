<?php 
        
session_start();
include('connection.php');
if( isset($_SESSION['email']) AND isset($_SESSION['pass']) ){       
        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tactics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/player/style.css" />
    <style>
        /* *{
            border:  2px solid red;
        } */

        .bg-cumst{
            background-color: #008037;
        }

        div .card-body {
            text-align: center;
            overflow: auto;
            text-overflow: ellipsis;
        }

        div .card-header .card-title{
            text-align: center;
        }

        .conta{
          background-color: #fff;
          margin-left: 10%;
          margin-right: 10%;
          margin-top:3%;
          padding:40px;
          width:80%;
          height:50%;
        }
        
        .stitle{
          font-size: 28px;
          text-align: start;
          font-family: "Barlow Semi Condensed" ,"sans-serif";
          font-weight: 800;
          color:#008037;
          margin-bottom:25px;
        }

        .mois{

          font-family: "Barlow Semi Condensed" ,"sans-serif";
          font-size: 25px;
          color:#77c260;
          margin-bottom:25px;
          margin-left:25px;
          margin-top:50px;
        }

        p{
          font-family: "Barlow , Arial, Helvetica", "sans-serif";
          font-size: 20px;
          font-weight: 400;
          margin-bottom:25px;
          margin-left:25px;
        }

        .smalltitle{
          font-size: 20px;
        }

        .mylist{
          font-family: "Barlow , Arial, Helvetica", "sans-serif";
          font-size: 17px;
          font-weight: 500;
          margin-bottom:25px;
          margin-left:25px;
        }

        .myig{
          width:300px;
          height: 400px;
          margin-bottom : 40px;
          margin-left:25px;
          display: inline-block;
        }

        .mix{
          margin-top:20px;
          margin-bottom:20px;
        }


    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-cumst bg-gradient ">
        <div class="container-fluid">
          <a class="navbar-brand" href="player_home.php">
            <img src="./img/logo2.png" alt="logo" style="height:45px;" />
            Niya
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="player_home.php">Acceuil</a>
                  </li>

                <li class="nav-item">
                    <a class="nav-link " href="./nutrition.php">Nutrition</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./communication.php">Communication</a>
                  </li>


              

              <li class="nav-item">
                <a class="nav-link " href="./mentalite.php">Mentalité</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./workout.php">Workout</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="./tactics.php">Tactics</a>
              </li>
              
              
            </ul>
            <form class="d-flex ms-auto">
              <a class="btn btn-outline-danger" style="color:white; border-color:#fff;" href="logout.php">Logout </a>
            </form>
          </div>
        </div>
      </nav>


      <div class="conta shadow">


      <h2 class="stitle">Top 10 des tactiques de football</h2>
      
      <div class="mix">
      <h3 class="mois"><strong>1. Tactique VERROU</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/verrou-tactic.webp" alt="verrou"  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      La tactique Verrou est également connue sous le nom de Catenaccio. Cela apparaît comme une tactique entièrement basée sur le score de l'adversaire. Verrou signifie verrouiller en français, et le but de cette tactique est de verrouiller le but et le score de l'adversaire. Avec cette tactique, 6-7 attaquants ont encerclé le but adverse.<br><br>

    Parmi les joueurs restants, 1 joueur était le dernier joueur libéro et les 3 autres joueurs ont continué en tant que défenseur. Cette tactique de football était basée sur la symétrie, et les 7 joueurs à l'avant se déplaçaient constamment en symétrie les uns avec les autres.<br><br>

    Au fil du temps, les Italiens ont trouvé une forme plus avancée de cette tactique, soulignant que le but n'est pas seulement de marquer des buts mais aussi de positionner les joueurs dans la zone de défense. À ce stade, les tacticiens du football italien ont développé la tactique 1-3-3-3 et ont largement vaincu la tactique de Verrou.<br><br>
      </p>

      </div>

      </div>


      <div class="mix">
      <h3 class="mois"><strong>2. Tactique WM</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/wm-tactic-768x1138-1.webp" alt="WM"  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      
      Comme on peut le voir sur l'image, l'application WM appliquée avec une séquence 3-2-2-3 est une méthode très efficace et réussie. Surtout dans les années 1950, ces tactiques, fréquemment utilisées dans le football mondial, se sont développées au fil du temps et ont pris les noms WW et MM.<br><br>
    
      Dans la tactique WM, les attaquants forment la lettre W (3-2), tandis que les défenseurs forment la lettre M (2-3).<br><br>

      Le but principal de la tactique est que 2 défenseurs essaient d'arrêter les attaques. Parmi les joueurs défensifs qui ont arrêté les attaques, le troisième joueur derrière qui a pris le ballon était le joueur libéro qui a commencé l'attaque en contrôlant le ballon. Il forme la lettre M de cette tactique. Dans la lettre W de la tactique, les attaquants ont pris le ballon au libéro et ont réussi des lancers aériens.<br><br>

      </p>

      </div>

      </div>

      <div class="mix">
      <h3 class="mois"><strong>3. Football total</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/total-footbal-tactic.webp" alt="total"  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      
      Une tactique de football totale est une tactique de football qui est décrite comme élargissant le champ et rétrécissant le champ. Le fondateur de la tactique Total Football est Rinus Michels. Dans la tactique du football total, l'objectif est d'élargir le terrain lorsque le ballon est dans sa propre équipe et de réduire le terrain lorsque le ballon est dans l'équipe adverse.<br><br>
      De cette façon, l'équipe adverse ne pourrait pas dominer le terrain contre vous. Donc, dans la tactique totale du football, c'est l'équipe qui applique toujours cette tactique. Le but est d'intimider l'adversaire avec de la pression et de marquer des buts.<br><br>
      Dans cette tactique, la séquence 4-3-3 est appliquée. Dans les années 1970, cette tactique était très souvent utilisée. La Coupe du monde de 1974, en particulier, a été la période où la tactique du football total a été appliquée avec le plus grand succès.

      
      </p>

      </div>

      </div>

      <div class="mix">
      <h3 class="mois"><strong>4. Tactique TIKI TAKA</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/tiki-taka-tactic-600x832-1.webp" alt="TIKI TAKA"  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      <br>
      La tactique Tiki-Taka, qui a été inventée après la tactique Total Football, est similaire à la tactique Total Football. Cette tactique Tiki-Taka a été développée par un élève de Rinus Michel nommé Cruyff.<br><br>
      La tactique Tiki-Taka était basée sur des passes constantes entre les joueurs. Le but était d'intimider et de démoraliser l'adversaire en passant constamment. Basée sur le système 4-3-3, cette tactique consiste à marquer des buts plus facilement en distrayant l'adversaire.<br><br>
      En particulier, Barcelone a obtenu un grand succès en appliquant cette tactique pendant de nombreuses années.<br><br>
      
      </p>

      </div>

      </div>


      <div class="mix">
      <h3 class="mois"><strong>5. Tactique coup de pied et ruée</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/kick-and-rush-tactic-600x875-1.webp" alt=""  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      
      <br><br>La tactique Kick and Rush est un système qui ne repose sur aucun alignement sur le terrain. Cette tactique, qui signifie Hit and Runs, était pratiquée par les équipes phares du football anglais. Les inventeurs de la tactique Kick and Rush sont également britanniques.<br><br>
      Dans la tactique du coup de pied et de la course qui est encore utilisée aujourd'hui, le but est de marquer l'adversaire avec des passes longues et croisées. Les passes diagonales confondent l'adversaire, ce qui facilite le fait de marquer des buts contre l'adversaire.<br><br>

      
      </p>

      </div>

      </div>

      <div class="mix">
      <h3 class="mois"><strong>6. Tactique du catenaccio</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/catennaccio-tactic-730x1024-1.webp" alt=""  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      
      <br>
      La tactique du catenaccio, qui est une version améliorée des systèmes Verrou et WM, est une tactique de football complètement défensive.<br><br>
      Cette tactique, jouée avec une formation de terrain en 5-3-2, vise à ne pas faire jouer l'équipe adverse. Les clubs italiens et argentins, en particulier, utilisent fréquemment cette tactique.<br><br>
      Le but est d'intimider les joueurs et de prévenir les attaques en se défendant complètement.<br><br>
      5 joueurs, alignés symétriquement dans un champ de 25-30 mètres, défendent très bien et repoussent l'adversaire. L'Inter et l'Argentine sont les meilleurs représentants de la tactique Catenaccio. C'est la meilleure tactique de football des années 1960.<br><br>

      
      </p>

      </div>

      </div>

      <div class="mix">
      <h3 class="mois"><strong>7. Body Crash Football Tactique</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/body-crash-tactic.webp" alt=""  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      
      <br><br><br>
      La tactique Body Crash est une tactique de football basée sur la condition physique. Bien que le nombre et le talent ne soient pas importants dans cette tactique, la condition musculaire et corporelle a gagné en importance.
      <br><br>
      La tactique Body Crash est une tactique de football basée sur la condition physique. Bien que le nombre et le talent ne soient pas importants dans cette tactique, la condition musculaire et corporelle a gagné en importance.
      
      </p>

      </div>

      </div>


      <div class="mix">
      <h3 class="mois"><strong>8. La tactique Joga Bonito</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/joga-bonito-tactic-600x838-1.webp" alt=""  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      <br><br>
      Basé sur le système de jeu brésilien et portugais, Joga Bonito signifie un jeu de Nice en portugais. Le talent est très important dans cette tactique. Les représentants les plus importants de cette tactique sont les joueurs qui utilisent bien leurs chevilles et offrent un bon contrôle du ballon. En particulier, des joueurs de football tels que Ronaldinho, Ronaldo, Roberto Carlos et Rivaldo sont des représentants importants de cette tactique.<br><br>
      C'est une tactique que les joueurs qui développent bien leurs chevilles dans le beach soccer tactique réussissent mieux.<br><br>

      
      </p>

      </div>

      </div>

      <div class="mix">
      <h3 class="mois"><strong>9. Tactique d'autobus de stationnement</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/parking-bus-tactic-600x857-1.webp" alt=""  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      
     
      <br><br><br>
      La tactique Parking Bus est un style de jeu dans lequel tous les joueurs sont positionnés en défense. Le but de cette tactique n'est pas de marquer des buts. Cette tactique est très ennuyeuse pour les fans de football. Le représentant le plus important de cette tactique est Joose Mourinho. Alors que l'entraîneur à succès dirigeait l'équipe de Chelsea, il a apporté de nombreux succès à son équipe avec la tactique Parking Bus.
      
      
      </p>

      </div>

      </div>

      <div class="mix">
      <h3 class="mois"><strong>10. GegenPressing Tactic</strong></h3>
      <div style="float: left;">
      <img src="https://ekipgrass.net/wp-content/uploads/2022/09/gegenpressing-tactic.webp" alt=""  class="myig" />
      </div>
      <div style="height:400px ; display:flex;">
      <p>
      <br>
      La tactique Gegenpressing est la tactique de football la plus admirée de ces dernières années. Le but de cette tactique, assez difficile à appliquer, est de défendre en attaquant. Le slogan de la tactique est que la meilleure défense est l'attaque.
      <br><br>
      Le but est de gagner le ballon et de marquer des buts en appuyant avec au moins 5-6 joueurs lorsque le ballon de football traverse le terrain de l'adversaire. L'application de coup de pied Gegenpressing est une tactique très difficile. Parce que cela demande à la fois de l'habileté et de l'habileté.
      <br><br>
      Il n'y a pas de rouille inutile dans cette tactique. L'attaquant est considéré comme le joueur le plus important qui soutient également le milieu de terrain. Les équipes les plus importantes de praticiens de la tactique sont le Borussia Dortmund et Liverpool.

      
      </p>

      </div>

      </div>
      








      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>



<?php
}else{
    header('Location:login.php');
}
?>      