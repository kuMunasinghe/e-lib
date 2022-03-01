<!DOCTYPE html PUBLIC >
<html xmlns>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search | Books</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<center><h1>Search Results</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="userdata.php" style="font-size:30px;">◀</a></font>
	<table>
    	<tr>
		<th>ID</th>
            <th>Name</th>
            <th>Path</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "<script type='text/javascript'>alert('Empty Search & Try again ⚠');
			window.location='books.php';
			</script>";
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		include('config.php');
	?>
    <?php
		if($cbo=="id")
		{
			$query="SELECT * FROM books WHERE id='".$search."'";
			$sql=mysqli_query($con,$query) or die(mysqli_error($con));
		

	?>

    <?php
	
		while($di=mysqli_fetch_array($sql))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
               
                <td align="center"><a href="Delete_Book.php? txtid=<?php echo $tr[0];?>" title="delete" class="btn btn-danger" onclick="return confirm(' Are you sure you want to delete this book ⁉')">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Book.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>  
			</tr>
            <?php
		}
		}
		else if($cbo=="name")
		{
			$query="SELECT * FROM books WHERE name='".$search."'";
			$sql=mysqli_query($con,$query) or die(mysqli_error($con));
	?>
    <?php
		while($fn=mysqli_fetch_array($sql))
		{
	?>
			<tr>
				<td><?php echo $fn[0]; ?></td>
				<td><?php echo $fn[1]; ?></td>
                <td align="center"><a href="Delete_Book.php? txtid=<?php echo $tr[0];?>" title="delete" class="btn btn-danger" onclick="return confirm(' Are you sure you want to delete this book ⁉')">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Book.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>  
			</tr>
            <?php
				}
			?>  
     <?php
		}
		
			?>
</table>
</body>
</html>