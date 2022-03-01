<?php
include('config.php');
if(isset($_POST["reg"]))
{
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $password=mysqli_real_escape_string($con,$_POST['pwd']);
   $cpassword=mysqli_real_escape_string($con,$_POST['cpwd']);
   $firstnm=mysqli_real_escape_string($con,$_POST['firstname']);
   $lastnm=mysqli_real_escape_string($con,$_POST['lastname']);
   $reg_no=mysqli_real_escape_string($con,$_POST['reg_no']);

   if(empty($email) && empty($password) && empty($cpassword) && empty($firstnm) && empty($lastnm) && empty($reg_no))
   {
    echo "<script type='text/javascript'>alert('Please Fill the all the Information 💡');
    window.location='register.php';</script>";
   }
   else
   {
       if($password != $cpassword)
       {
        echo "<script type='text/javascript'>alert('passwords are not the same 💡');
        window.location='register.php';</script>";
       }
       else
       {    $query="CALL new_register('$email','user','$password','$firstnm','$lastnm','$reg_no')";
            if(mysqli_query($con, $query))
            {
                echo "<script type='text/javascript'>alert('You had Signed Up , You can Login in the Next Page. ✅');
                window.location='account.php';</script>";
            } 
            else
            {
                echo $reg_no;
                echo "";
                echo "ERROR: Could not able to execute . " . mysqli_error($con);
            }
        }

       }
}
   
else
{

    echo "not even data";
}

?>
