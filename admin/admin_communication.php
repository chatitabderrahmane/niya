<?php

session_start();
include("../connection.php");

if(!$_SESSION['admin']){

    header('Location:../admin.php');

}


if(isset($_POST['title']) AND isset($_POST['description'])){

    $title = $_POST['title'];
    $description = $_POST['description'];

    try{
        $rs = $con->prepare("INSERT INTO communication ( title, description ) VALUES ( ?, ? )");
        $rs->execute([$title,$description]);

        if($rs != 0 ){ 
            echo "<script> alert('Added Successfully '); </script>";
        }else{
            echo " <br> Account was not created <br> ";
        }

    }
    catch(PDOEXCEPTION $err){
        echo "Failed To Connect. Error " . $err->getMessage();
    }


}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    try{
        $rs = $con->prepare("delete from communication where id = ?");
        $rs->execute([$id]);

        if($rs != 0 ){ 
            //echo "<script> alert('Deleted Successfully '); </script>";
            header('Location:./admin_communication.php');
        }else{
            echo " <br> Account was not deleted <br> ";
        }

    }
    catch(PDOEXCEPTION $err){
        echo "Failed To Connect. Error " . $err->getMessage();
    }
}


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .tab{
            margin: 5rem;
        }

        td{
            padding: 0.5rem;
        }

        .jem{
            margin:5rem;
        }

    </style>

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./adminhome.php">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link " aria-current="page" href="./adminhome.php">News</a>
        <a class="nav-link "  href="./admin_nutrition.php">Nutrition</a>
        <a class="nav-link active"  href="./admin_mentalite.php">Mentalite</a>
        <a class="nav-link"  href="./admin_communication.php">Communication</a>

      </div>

      <div class="d-flex ms-auto">
              <a class="btn btn-outline-danger" style="color:white; border-color:#fff;" href="../logout.php">Logout </a>
      </div>

    </div>
  </div>

 

</nav>


<center>

<form action="" method="post">

<table class="tab">


<tr>
<td colspan="2"><center><h1>Add communication</h1></center></td>
</tr>


<tr>
<td> </td>
<td> </td>
</tr>

<tr>
    <td><label for="exampleFormControlInput1" class="form-label" style="font-size : 18px;">Title</label> </td>
<td> 
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title">

</td>

</tr>

<tr>
    <td><label for="exampleFormControlInput1" class="form-label" style="font-size : 18px;">Description</label> </td>
<td> 
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>

</td>

</tr>

<tr>

<td colspan="2"> <center> <input type="submit" name="submit" value="Add" class="btn btn-success"> </center> </td>

</tr>


</table>

</form>
<div class="jem">
<table class="table table-dark table-borderless">
  <thead class="table-dark">
    <tr> 
        <th> # </th>
        <th> Title </th>
        <th> Description </th>
        <th> Action </th>
    </tr>
  </thead>
  <tbody class="table-light">
    <?php 
    $rs = $con->prepare("select * from communication");
    $rs->execute();

    while($row = $rs->fetch()){
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];

    ?>
    <tr>
        <td> <?php echo $id; ?></td>
        <td> <?php echo $title; ?></td>
        <td> <?php echo $description; ?>  </td>
        <td><a href="./admin_communication.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
    </tr>

    <?php } ?>

  </tbody>

</table>
   
</div>


</center>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>