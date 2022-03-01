<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['pwd']); 
      
      $query = "SELECT reg_no FROM login_data WHERE email = '$email' and password = '$password'";
      $sql = mysqli_query($con,$query);
      if(!$sql)
      {
         echo "failed";
      }
      else
      {
         echo "LOGIN";
         
      }
     
   }
?>