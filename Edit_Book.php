<?php
include('config.php');
include('headeradmin.php');
?>

<!DOCTYPE html PUBLIC >
<html xmlns>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Book</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div style="padding-top: 100px;"></div>
<h1 style="text-align:center"> Edit Book Data ⚙📚</h1>
	<center>
    <div class="box">
    	<?php
		$id = $_GET['txtid'];
		include ("config.php");

        $query="SELECT * FROM books WHERE  id='".$id."'";
        $sql=mysqli_query($con,$query) or die(mysqli_error($con));
		if($tr=mysqli_fetch_array($sql))
		{
	?>
    <table><form method="POST" action="bookedit.php">
    <tr>
        <input type="hidden" name="id" value="<?php echo $tr[0]; ?>">
        </tr>
    	<tr>
        	<th>id:</th>
            <td><label><?php echo $tr[0]; ?></label></td>
        </tr>
        <tr>
        	<th>Name :</th>
        	<td><input type="text" name="name" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>File Path:</th>
        	<td>
            	<input type="Password" name="path" value="<?php echo $tr[2]; ?>" /></td>
            </td>
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
    <br>
    <br>
    <br>
  <a class="" href="books.php" style="font-size:30px;">◀</a>
    </div>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>

<?php

include('footer.php');
?>