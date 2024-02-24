<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot password </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Logger/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Logger/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Logger/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Logger/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Logger/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="Logger/vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="Logger/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="Logger/css/util.css">
	<link rel="stylesheet" type="text/css" href="Logger/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
					<span class="login100-form-title">
						Forgot password
					</span>
                   
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							  
						</span>

						<a href="#" class="txt2">
						
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							recover passsword
						</button>
					</div>
					
					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							
						</span>

						<a href="login.php" class="txt3">
							Cancel
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	<script src="Logger/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="Logger/vendor/animsition/js/animsition.min.js"></script>

	<script src="Logger/vendor/bootstrap/js/popper.js"></script>
	<script src="Logger/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="Logger/vendor/select2/select2.min.js"></script>

	<script src="Logger/vendor/daterangepicker/moment.min.js"></script>
	<script src="Logger/vendor/daterangepicker/daterangepicker.js"></script>

	<script src="Logger/vendor/countdowntime/countdowntime.js"></script>

	<script src="Logger/js/main.js"></script>

</body>
</html> 


<?php

session_start();
include('connection.php');
include('mail.php');
$_SESSION['Exists'] = false;
$_SESSION['Created'] = false;

if( isset($_POST['email']) ){
    $exists1 = false;
	$exists2 = false;
    $_SESSION['newpass'] = false;
    $email = $_POST['email'];

    $rs = $con->prepare("select * from user where email= ?");
    $rs->execute([$email]);
    
    if($row = $rs->fetch()){
        $exists1 = true;
    }

	$rs = $con->prepare("select * from club where email= ?");
    $rs->execute([$email]);
    
    if($row = $rs->fetch()){
        $exists2 = true;
    }


    if($exists1){
        $pass  = generatePassword();
        try{
            $rs = $con->prepare("update user set pass= ? where email = ?");
            $rs->execute([$pass,$email]);
    
            if($rs != 0 ){
                $_SESSION['newpass'] = true;
                SendPersMail($email,"Password recovery","<h1> Here is your new password : $pass <br> you  can access your account using it </h1>");
                header('Location:login.php');
            }
    
        }
        catch(PDOEXCEPTION $err){
            echo "Failed To Connect. Error " . $err->getMessage();
        }
    }else if($exists2){

		$pass  = generatePassword();
        try{
            $rs = $con->prepare("update club set pass= ? where email = ?");
            $rs->execute([$pass,$email]);
    
            if($rs != 0 ){
                $_SESSION['newpass'] = true;
                SendPersMail($email,"Password recovery","<h1> Here is your new password : $pass <br> you  can access your account using it </h1>");
                header('Location:login.php');
            }
    
        }
        catch(PDOEXCEPTION $err){
            echo "Failed To Connect. Error " . $err->getMessage();
        }

	}else{
        echo "Email is not registered. <br> please consider signing up <br> ";
    }
    

}


?>