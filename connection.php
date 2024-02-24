<?php 

    
        $db_src    = "mysql:host=localhost;dbname=niya";
        $db_user   = "root";
        $db_pass   = "";
        try{
            $con = new PDO($db_src, $db_user, $db_pass);

            // echo "<br> Connected <br>";
        }
        catch(PDOEXCEPTION $err){
            echo "Failed To Connect. Error " . $err->getMessage();
        }
        


?>




