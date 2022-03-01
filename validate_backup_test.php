<?php

include('config.php');
session_start();

if(! $con){
    die('SERVER ERROR !'.mysqli_error($con));
}
 else
 {
     if(isset($_POST["login"]))
     {
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['pwd']);
        if(isset($_POST["rem"]))
        {
            $rem=mysqli_real_escape_string($con,$_POST['rem']);
        }
        else
        {
            $rem=0;
        }

        $query="SELECT * FROM login_data WHERE email='".$email."' AND password='".$password."' LIMIT 1";
        $sql=$con->query($query);
        if($sql->num_rows>0)
        {
            while($row=$sql->fetch_assoc())
            {
                $_SESSION['email']=$row["email"];
                $_SESSION['regno']=$row["reg_no"];
                $_SESSION['firstnm']=$row["first_name"];
                $user_stat=$row['user_stat'];
                $_SESSION['userstat']=$user_stat;
                $_SESSION['email']=$email;
                if($rem==1)
                {
                    setcookie($email , time() + (86400 * 30), "/"); 
                }
                if('admin'== $user_stat)
                {
                    echo  $_SESSION['firstnm'];
                    echo $user_stat;
                    header("Location:adminhome.php");

                }
                elseif('user'==$user_stat)
                {
                    header("Location:userhome.php");
                }
                else
                {
                    echo "UnknownERROR";
                }
                
            }
           
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
  

?>