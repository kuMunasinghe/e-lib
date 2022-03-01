<!DOCTYPE html PUBLIC >
<html xmlns>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search | </title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<center><h1>Search Results</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="userdata.php" style="font-size:30px;">◀</a></font>
	<table>
    	<tr>
		    <th>Email</th>
            <th>User Stat</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Registration Number</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "<script type='text/javascript'>alert('Empty Search & Try again ⚠');
			window.location='userdata.php';
			</script>";
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		include('config.php');
	?>
    <?php
		if($cbo=="Email")
		{
			$query="SELECT email,user_stat,first_name,last_name,reg_no FROM login_data WHERE email='".$search."'";
			$sql=mysqli_query($con,$query) or die(mysqli_error($con));
		

	?>

    <?php
	
		while($di=mysqli_fetch_array($sql))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
                <td><?php echo $di[3]; ?></td>
                <td><?php echo $di[4]; ?></td>
				<td align="center"><a class="btn btn-danger" href="Delete_Form.php? txtid=<?php echo $di[0];?>">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Form.php? txtid=<?php echo $di[0];?>">Edit</a> </td> 
			</tr>
            <?php
		}
		}
		else if($cbo=="First Name")
		{
			$query="SELECT email,user_stat,first_name,last_name,reg_no FROM login_data WHERE first_name='".$search."'";
			$sql=mysqli_query($con,$query) or die(mysqli_error($con));
	?>
    <?php
		while($fn=mysqli_fetch_array($sql))
		{
	?>
			<tr>
				<td><?php echo $fn[0]; ?></td>
				<td><?php echo $fn[1]; ?></td>
                <td><?php echo $fn[2]; ?></td>
                <td><?php echo $fn[3]; ?></td>
                <td><?php echo $fn[4]; ?></td>
				<td align="center"><a class="btn btn-danger" href="Delete_Form.php? txtid=<?php echo $fn[0];?>">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Form.php? txtid=<?php echo $fn[0];?>">Edit</a> </td>    
			</tr>
            <?php
				}
			?>  
     <?php
		}
		else if($cbo=="Last Name")
				{
					$query="SELECT email,user_stat,first_name,last_name,reg_no FROM login_data WHERE last_name='".$search."'";
					$sql=mysqli_query($con,$query) or die(mysqli_error($con));
     ?>
		<?php
		while($ln=mysqli_fetch_array($sql))
		{
		?>
			<tr>
				<td><?php echo $ln[0]; ?></td>
				<td><?php echo $ln[1]; ?></td>
                <td><?php echo $ln[2]; ?></td>
                <td><?php echo $ln[3]; ?></td>
                <td><?php echo $ln[4]; ?></td>
				<td align="center"><a class="btn btn-danger" href="Delete_Form.php? txtid=<?php echo $ln[0];?>">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Form.php? txtid=<?php echo $ln[0];?>">Edit</a> </td> 
			</tr>
            <?php
				}
			}
			else if($cbo=="Registeration No")
			{
				$query="SELECT email,user_stat,first_name,last_name,reg_no FROM login_data WHERE reg_no='".$search."'";
				$sql=mysqli_query($con,$query) or die(mysqli_error($con));
			?>  
			<?php
			while($rn=mysqli_fetch_array($sql))
				{			
			?>
            <tr>
				<td><?php echo $rn[0]; ?></td>
				<td><?php echo $rn[1]; ?></td>
                <td><?php echo $rn[2]; ?></td>
                <td><?php echo $rn[3]; ?></td>
                <td><?php echo $rn[4]; ?></td>
                <td align="center"><a class="btn btn-danger" href="Delete_Form.php? txtid=<?php echo $rn[0];?>">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Form.php? txtid=<?php echo $rn[0];?>">Edit</a> </td> 
			</tr>
            
            <?php
				}
			}
			?>
</table>
</body>
</html>