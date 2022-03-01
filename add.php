<?php
include('config.php');
if(isset($_POST["reg"]))
{
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $password=mysqli_real_escape_string($con,$_POST['pwd']);
   $userstat=mysqli_real_escape_string($con,$_POST['userstat']);
   $firstnm=mysqli_real_escape_string($con,$_POST['firstname']);
   $lastnm=mysqli_real_escape_string($con,$_POST['lastname']);
   $reg_no=mysqli_real_escape_string($con,$_POST['reg_no']);

   if(empty($email) && empty($password) && empty($firstnm) && empty($lastnm) && empty($reg_no))
   {
    echo "<script type='text/javascript'>alert('Please Fill the all the Information 💡');
    window.location='register.php';</script>";
   }
   else
   {
      
     
          $query="CALL new_register('$email','$userstat','$password','$firstnm','$lastnm','$reg_no')";
            if(mysqli_query($con, $query))
            {
                echo "<script type='text/javascript'>alert('Data Enterd ✅');
                window.location='admin.php';</script>";
            } 
            else
            {
                echo $reg_no;
                echo "";
                echo "ERROR: Could not able to execute . " . mysqli_error($con);
            }
  
    }

}
   
else
{

    echo "not even data";
}

?>
