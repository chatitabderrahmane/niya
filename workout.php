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
    <title>Workout</title>
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
          font-size: 17px;
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
                    <a class="nav-link " href="./communication.php">Communication</a>
                  </li>


              

              <li class="nav-item">
                <a class="nav-link" href="./mentalite.php">Mentalité</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="./workout.php">Workout</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./tactics.php">Tactics</a>
              </li>
              
              
            </ul>
            <form class="d-flex ms-auto">
              <a class="btn btn-outline-danger" style="color:white; border-color:#fff;" href="logout.php">Logout </a>
            </form>
          </div>
        </div>
      </nav>

      <div class="conta shadow">

<h2 class="stitle">Plan d'entraînement de football</h2>
<h3 class="mois"><strong>Mois 1</strong></h3>
<p>Le premier mois est destiné à vous aider à vous mettre en forme et à commencer à développer des techniques fondamentales de vitesse et d'agilité. Il s'agit d'un programme de trois jours par semaine, le premier jour étant axé sur la force, le deuxième sur la vitesse et l'agilité et le troisième sur l'endurance.</p>

<p class="smalltitle"><strong>Jour 1</strong></p>
<ul class="mylist">
  <li>Squats arrière: 3 × 12-20</li>
  <li>Soulevés de terre roumains: 3 × 12-20</li>
  <li>Développé couché avec haltères: 3 × 12-20</li>
  <li>Tractions : 3×Max</li>
  <li>Presse militaire debout : 3 × 12-20</li>
</ul>


<p class="smalltitle"><strong>Jour 2</strong></p>
<p><em>10-15 minutes d'exercices techniques de vitesse et d'agilité.</em></p>
<ul class="mylist">
  <li> Sprint to Lateral Shuffle : 3×30 mètres (changer de côté tous les 5 mètres)</li>
  <li>Sprint à rétropédalage : 3 × 30 mètres</li>
  <li>Saut en longueur debout : 1×5</li>
  <li>Saut en contre-mouvement : 1 × 5 (atterrissage au bâton)</li>
</ul>


<p class="smalltitle"><strong>Jour 3</strong></p>
<p><em>Faites chaque exercice avec un ballon médical. Effectuez chacun pendant 30 secondes et répétez le circuit trois fois.</em></p>
<ul class="mylist">
  <li> Nettoyer et presser</li>
  <li>Passe poitrine</li>
  <li>Lancer au-dessus de la tête</li>
  <li>Tourner et jeter</li>

  <li>Med Ball Squat (tenir le ballon devant)</li>
  <li>Med Ball Soulevé de terre roumain (tenir le ballon devant)</li>
  <li>Med Ball Lunges (tenir le ballon devant)</li>
  <li>Crunchs Med Ball (tenir le ballon au-dessus de la poitrine)</li>

  <li> Med Ball Leg Raises (tenir le ballon entre les pieds)</li>
  <li>Jeu demi-terrain : 20-30 minutes</li>

</ul>


<h3 class="mois"><strong>Mois 2-3</strong></h3>
<p>Le programme pendant les deuxième et troisième mois s'étend à cinq jours par semaine. Trois jours sont consacrés à la force et au conditionnement métabolique, et les deux autres jours se concentrent sur la vitesse, l'agilité et la pliométrie.</p>

<p class="smalltitle"><strong>Jour 1</strong></p>
<ul class="mylist">
  <li>Squats arrière: 3 × 12-20</li>
  <li>Soulevés de terre roumains: 3 × 12-20</li>
  <li>Développé couché avec haltères: 3 × 12-20</li>
  <li>Tractions : 3×Max</li>
  <li>Presse militaire debout : 3 × 12-20</li>
  <li>Sprints : 10×30 avec 20 secondes de marche de récupération entre les sprints</li>
</ul>

<p class="smalltitle"><strong>Jour 2</strong></p>
<p><em>10-15 minutes d'exercices techniques de vitesse et d'agilité.</em></p>
<ul class="mylist">
  <li> Sprint to Lateral Shuffle : 3×30 mètres (changer de côté tous les 5 mètres)</li>
  <li>Sprint à rétropédalage : 3 × 30 mètres</li>
  <li>Saut en longueur debout : 1×5</li>
  <li>Saut en contre-mouvement : 1 × 5 (atterrissage au bâton)</li>
</ul>

<p class="smalltitle"><strong>Jour 3</strong></p>
<p><em>Faites chaque exercice avec un ballon médical. Effectuez chacun pendant 30 secondes et répétez le circuit trois fois.</em></p>
<ul class="mylist">
  <li> Nettoyer et presser</li>
  <li>Passe poitrine</li>
  <li>Lancer au-dessus de la tête</li>
  <li>Tourner et jeter</li>

  <li>Med Ball Squat (tenir le ballon devant)</li>
  <li>Med Ball Soulevé de terre roumain (tenir le ballon devant)</li>
  <li>Med Ball Lunges (tenir le ballon devant)</li>
  <li>Crunchs Med Ball (tenir le ballon au-dessus de la poitrine)</li>

  <li> Med Ball Leg Raises (tenir le ballon entre les pieds)</li>
  <li>Matchs demi-terrain : 20-30 minutes</li>

</ul>

<p class="smalltitle"><strong>Jour 4</strong></p>
<p><em>10-15 minutes d'exercices techniques de vitesse et d'agilité.</em></p>
<ul class="mylist">
  <li> Sprint to Lateral Shuffle : 3×30 mètres (changer de côté tous les 5 mètres)</li>
  <li>Sprint à rétropédalage : 3 × 30 mètres</li>
  <li>Saut en longueur debout : 1×5</li>
  <li>Saut en contre-mouvement : 1 × 5 (atterrissage au bâton)</li>
</ul>

<p class="smalltitle"><strong>Jour 5</strong></p>
<p><em>Faites chaque exercice avec votre poids corporel. Effectuez chacun pendant 30 secondes et sprintez pendant 30 secondes entre les exercices. Répétez le circuit trois fois.</em></p>
<ul class="mylist">

  <li>Squats</li>
  <li>Fentes frontales </li>
  <li>Fentes inversées</li>
  <li>Fentes latérales</li>

  <li>Inchworms</li>
  <li>Marcher sur les orteils </li>
  <li>Marcher sur les talons</li>
  <li>Brouettes</li>

  <li>Course à pied d'ours</li>
  <li>Des pompes </li>
  <li>Tractions</li>
  <li>Trempettes</li>

</ul>



<h3 class="mois"><strong>Mois 4-6</strong></h3>
<p>Cette phase est également basée sur un plan de cinq jours. Cependant, les exercices sont plus complexes et les entraînements sont plus difficiles à réaliser pour favoriser une meilleure forme physique.</p>

<p class="smalltitle"><strong>Jour 1</strong></p>
<ul class="mylist">
  <li>Hang Clean : 3 × 6 à 60 % (au-dessus des genoux)</li>
  <li>Squats avant : 3 × 8-12 à 70 %</li>
  <li>Relances arrière : 3×15-20</li>
  <li>TPresse à haltères inclinée : 3 × 8-12</li>
  <li>Rangées d'haltères à un bras : 3 × 8-12 chaque bras</li>

  <li>Presse militaire assise : 3×8-12</li>
  <li>Sprints : 2 x 10 x 20 mètres avec 20 secondes de marche de récupération entre les sprints et 5 minutes de récupération entre les séries</li>


</ul>


<p class="smalltitle"><strong>Jour 2</strong></p>
<p><em>10-15 minutes d'exercices techniques de vitesse et d'agilité.</em></p>
<ul class="mylist">
  <li> Sprint to Lateral Shuffle : 3×30 mètres (changer de côté tous les 5 mètres)</li>
  <li>Sprint à rétropédalage : 3 × 30 mètres</li>
  <li>Saut en longueur debout : 1×5</li>
  <li>Saut en contre-mouvement : 1 × 5 (atterrissage au bâton)</li>
</ul>

<p class="smalltitle"><strong>Jour 3</strong></p>
<ul class="mylist">

  <li> Développé couché avec haltères : 3×12-15 </li>
  <li>Trempettes : 3xMax</li>
  <li>Tractions : 3xMax            </li>
  <li>Épaules 3 en 1 : 3×12-15</li>

  <li> Sprint : </li>
  <li>1 × 20 mètres, 10 secondes de récupération</li>
  <li>1 × 40 mètres, 20 secondes de récupération  </li>
  <li>1 × 60 mètres, 40 secondes de récupération</li>

  <li>1 × 80 mètres, 60 secondes de récupération</li>
  <li>2 × 100 mètres, 60 secondes de récupération</li>
  <li>1 × 60 mètres, 40 secondes de récupération </li>
  <li>1 × 40 mètres, 20 secondes de récupération</li>
  <li>1×20 mètres</li>

</ul>

<p class="smalltitle"><strong>Jour 4</strong></p>
<p><em>10-15 minutes d'exercices techniques de vitesse et d'agilité.</em></p>
<ul class="mylist">
  <li> Sprint to Lateral Shuffle : 3×30 mètres (changer de côté tous les 5 mètres)</li>
  <li>Sprint à rétropédalage : 3 × 30 mètres</li>
  <li>Saut en longueur debout : 1×5</li>
  <li>Saut en contre-mouvement : 1 × 5 (atterrissage au bâton)</li>
</ul>

<p class="smalltitle"><strong>Jour 5</strong></p>
<ul class="mylist">
  <li> Squats arrière : 3 × 12-15 à 60 %</li>
  <li>Fentes : 3×12-15</li>
  <li>Bonjour : 3×12-15</li>
  <li>Relances arrière : 3×12-15</li>

  <li>Mollets : 3 × 12-15</li>
  <li>Matchs en demi-terrain : 20-30 minutes</li>


</ul>



</div>


      










      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>



<?php
}else{
    header('Location:login.php');
}
?>      