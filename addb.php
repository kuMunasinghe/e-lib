<?php

include ('headeradmin.php');
include ('config.php');

if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $filename = $_FILES['myfile']['name'];
    $destination = 'uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];

    if (!in_array($extension, [ 'pdf', 'docx'])) 
    {
        echo "You file extension must be .pdf or .docx";
    }
    move_uploaded_file($file, $destination) ;
  
    if(empty($id) && empty($name) &&  empty($path))
    {
        echo "<script type='text/javascript'>alert('Please Fill the all the Information 💡');
                window.location='addbook.php';</script>";
    }
    else
    {
            $sql=" INSERT INTO `books`(`id`, `name`, `path`) VALUES ($id,$name,$destination)";
        
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
    }



?>