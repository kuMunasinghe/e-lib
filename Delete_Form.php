<?php
include('config.php');

$id = $_GET['txtid'];
$query="DELETE FROM login_data WHERE email='".$id."'";
$sql=mysqli_query($con,$query) or die(mysqli_error($con));
    echo "<script type='text/javascript'>alert('User Removed Successfully ⚠');
    window.location='admin.php';
    </script>";

?>
