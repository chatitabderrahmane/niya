<?php

if(isset($_GET['id'])){


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard </title>
  <link rel="stylesheet" href="./css/club/style2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    /* *{
      border: 2px solid red;
    } */
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
      
      <div class="main-body">
        
      <?php 

        include("connection.php");
        $id = $_GET['id'];

        $rs = $con->prepare("select * from user where id = ?");
        $rs->execute([$id]);

        if($row = $rs->fetch()){
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $tel = $row['tel'];
            $email = $row['email'];
            $position= $row['position'];
            $image = $row['image'];

        ?>
        <img src="./images/<?php echo $image; ?>">
        <div class="title">
            <?php echo "$nom $prenom"; ?>
        </div>
        <div class="info">
            <?php echo $position; ?>
        </div>
        <div class="info">
            <?php echo $email ; ?>
        </div>
        <div class="info">
            <?php echo $tel; ?>
        </div>
        
        <?php  } ?>
        <a class="mya" href="./club_home.php">Retourner</a>
    </div>
      
    </section>
  </div>

</body>
</html>





<?php

}else{
    header("Location:./club_home.php");
}

?>