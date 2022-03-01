<?php
include('config.php');
include('headeradmin.php');

?>
<!DOCTYPE html PUBLIC >
<html xmlns>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body background="Images" bgcolor="#FFCC99">
<div style="padding-top: 100px;"></div>
<h1 style="text-align:center"> Edit User Data ⚙👥</h1>
	<center>
    <div class="box">
    	<?php
		$id = $_GET['txtid'];
		include ("config.php");

        $query="SELECT * FROM login_data WHERE  email='".$id."'";
        $sql=mysqli_query($con,$query) or die(mysqli_error($con));
		if($tr=mysqli_fetch_array($sql))
		{
	?>
    <table><form method="POST" action="edit.php">
        <tr>
        <input type="hidden" name="email" value="<?php echo $tr[0]; ?>">
        </tr>
    	<tr>
        	<th>Email:</th>
            <td><label><?php echo $tr[0]; ?></label></td>
        </tr>
        <tr>
        	<th>User Type :</th>
        	<td><input type="text" name="userstat" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>Password:</th>
        	<td>
            	<input type="Password" name="pwd" value="<?php echo $tr[2]; ?>" /></td>
            </td>
        </tr>
        <tr>
        	<th>First Name:</th>
        	<td><input type="text" name="firstname" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Last Name:</th>
            <td><input type="text" name="lastname" value="<?php echo $tr[4]; ?>" /></td>
        </tr>            
            <?php
				}
			?>
        	<td colspan="2" align="center">
            <br>
            <input type="submit" name="cmdedit" value="Save" class="btn btn-info" />
            </td>
        </tr>
	</form>
    </table>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="" href="admin.php" style="font-size:30px;">◀</a>
    </div>
    </center>
</body>
</html>