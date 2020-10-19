<?php
     $con = mysqli_connect("localhost:3306", "root", "", "ecommerce")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
    
?>
<?php/*
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass);
   
         if(! $con ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
		 if(!isset($_SESSION)){
      		session_start();
		 }
         mysqli_close($con);*/
?>


