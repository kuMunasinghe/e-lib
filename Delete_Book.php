<?php
include('config.php');

$id = $_GET['txtid'];
$query="SELECT path from books where id='$id'";
$sql=mysqli_query($con,$query);
while($row=$sql->fetch_assoc())
            {
                $path=$row["path"];
unlink($path);
            }
$query="DELETE FROM books WHERE id='".$id."'";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
    echo "<script type='text/javascript'>alert('Book Removed Successfully ⚠');
    window.location='books.php';
    </script>";

?>
