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
    <title>Nutrition</title>
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
                    <a class="nav-link active" href="./nutrition.php">Nutrition</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="./communication.php">Communication</a>
                  </li>


              

              <li class="nav-item">
                <a class="nav-link" href="./mentalite.php">Mentalité</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./workout.php">Workout</a>
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
      <br>

      <div class="row row-cols-1 row-cols-md-3 g-4" style="margin:30px;">

      <?php 

        $rs = $con->prepare("select * from nutrition");
        $rs->execute();

        while($row = $rs->fetch()){
            $title = $row['title'];
            $description = $row['description'];
            $image = $row['image'];
            $url = $row['url'];

        ?>

          <div class="col" >
            <div class="card shadow " style="height: 550px;">

            <a href="<?php echo $url; ?>">
            <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $title;  ?>  </h5><br>
              <p class="card-text"><?php echo $description ?> </p>
            </div>

            </div>


          </div>

          <?php
            }
        
            ?>

      </div>

      
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


<?php
}else{
    header('Location:login.php');
}
?>
