<?php
        include ("config.php");
        if($_SERVER['REQUEST_METHOD'] =="POST")
        {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $path=$_POST['path'];
       
        }
        $query="UPDATE books SET name='".$name."',path='".$path."' WHERE id='".$id."'" ;
        $sql=mysqli_query($con,$query) or die(mysqli_error($con));
        if($sql==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=books.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>