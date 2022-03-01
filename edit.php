
<?php
        include ("config.php");
        if($_SERVER['REQUEST_METHOD'] =="POST")
        {
        $email=$_POST['email'];
        $userstat=$_POST['userstat'];
        $password=$_POST['pwd'];
        $firstnm=$_POST['firstname'];
        $lastnm=$_POST['lastname'];

        }
        $query="UPDATE login_data SET user_stat='".$userstat."',password='".$password."',first_name='".$firstnm."',last_name='".$lastnm."' WHERE email='".$email."'" ;
        if(mysqli_query($con,$query) )
        {
            echo "<script type='text/javascript'>alert('Data Updated ⚠');
            window.location='admin.php';
            </script>";
        } 
        else
        {
            die(mysqli_error($con));
        }

        
    ?>