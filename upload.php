<?php

include('config.php');
if(isset($_POST["upload"]))
{ 
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $fname=$_FILES['userfile']['name'];
    $ftype=$_FILES['userfile']['type'];
    $temppath=$_FILES['userfile']['tmp_name'];

    
    $uploaddir="D:/xampp/htdocs/lib/uploads/";
    if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploaddir.$_FILES['userfile']['name']))
    {
        $sql="INSERT INTO `books`(`id`, `name`, `path`) VALUES ('$id','$fname','$uploaddir/$fname')";
            if(mysqli_query($con,$sql))
            {
                echo "<script type='text/javascript'>alert('Book added to Library ✅');
                window.location='books.php';</script>";
            }
            else
            {

                echo "failed";
            }
    }
    else
    {
        echo "Failed";
    }
}



?>

