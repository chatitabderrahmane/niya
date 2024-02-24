<?php

session_start();
include("mail.php");
$_SESSION['admin'] = false;

if(!isset($_SESSION['code'])){
    $pass = generatePassword();
    $_SESSION['code'] = $pass;
    SendPersMail('yassinebehilil@gmail.com','This is the new admin password',"The password is : ".$_SESSION['code']);
}
    


if(isset($_POST['code'])){
    $p = $_POST['code'];
    echo "<br> $p <br>";
    if($p === $_SESSION['code']){
        $_SESSION['admin'] = true;
        header('Location:./admin/adminhome.php');

    }else{
        echo "<script> alert('Incorrect Code'); </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log</title>
    <style>
        *{
            margin-top  : 2rem;
        }
    </style>
</head>
<body>

    <form method="Post">
    <center>
        <h1> Enter your code : </h1>
        <input type="password" name="code" >
        <input type="submit">

    </center>

    </form>

</body>
</html>