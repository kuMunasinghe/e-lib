<?php

include('config.php');
include
session_start();

if(! $con){
    die('SERVER ERROR !'.mysqli_error($con));
}
else{
    if(isset($_SESSION['userid'])) 
    {
     header("Location:home.php"); 
    }
 else
 {
     if(isset($_POST["login"]))
     {
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['pwd']);
        $rem=$_POST['rem'];
        if(!empty($email) && !empty($password))
        {
        $query="SELECT count(*) AS cnt FROM login_data WHERE email='".$email."' AND password='".$password."'";

        $sql=mysqli_query($con,$query) or die(mysqli_error($con));

        $row=mysqli_fetch_array($sql);

            if($row['cnt']>0)
            {
                $_SESSION['email']=$email;
                if($rem==1)
                {
                    setcookie($email , time() + (86400 * 30), "/"); 
                }
                header("location:index.php");
            }
            else
            {
                echo "<script type='text/javascript'>alert('Please Check Your Log-in Credentials ⚠');
                window.location='account.php';
                </script>";
                
            }
        }
                else
            {
                echo "<script type='text/javascript'>alert('Please Enter Valid Login Credentials 💡');
                window.location='account.php';
                </script>";
            }
        

    }
    
    
     
    }
  
}
?>