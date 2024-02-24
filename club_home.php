<?php 
        
session_start();
include('connection.php');
if( isset($_SESSION['email']) AND isset($_SESSION['pass']) ){       
        
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard </title>
  <link rel="stylesheet" href="./css/club/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    /* *{
      border: 2px solid red;
    } */

    .users .card a{
  width: 100%;
  margin-top: 8px;
  padding: 7px;
  cursor: pointer;
  border-radius: 10px;
  background: transparent;
  border: 1px solid #39835a;
}

.users .card a:hover{
  background: #39835a;
  color: #fff;
  transition: 0.5s;
}

  </style>

</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="./club_home.php" class="logo">
          <img src="./img/logo.jpg">
          <span class="nav-item">CLUB Name</span>
        </a></li>
        <li><a href="./club_home.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>

        <li><a href="./logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Liste de joueur</h1>
      </div>
      <div class="users">
        <?php 


            // $rs = $con->prepare("select * from user");
            // $rs->execute();
    
            // while($row = $rs->fetch()){
            //     $id = $row['id'];
            //     $nom = $row['nom'];
            //     $prenom = $row['prenom'];
            //     $tel = $row['tel'];
            //     $email = $row['email'];
            //     $position= $row['position'];
            //     $image = $row['image'];
        
        ?>

        <!-- <div class="card">
          <img src="./images/<?php echo $image; ?>">
          <h4><?php  echo "$nom $prenom"  ?></h4>
          <p><?php echo $position ?></p>
          <div class="per">
            <div class="fer"> <?php echo $email   ?> </div>
            <div class="fer" > <?php echo $tel ?> </div>
          </div>
          <a href="./player_profile.php?id=<?php echo $id; ?>">Profile</a>
        </div>
         -->
        <?php
            }
        
        ?>
        

        


      
  </div>
    </section>
  </div>

</body>
</html>

<?php
// }else{
//     header('Location:login.php');
// }
?>

