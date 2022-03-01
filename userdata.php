<?php
include("headeradmin.php");
?>
<!DOCTYPE html>
<html >
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Information</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<br>
<br>
<center><h1>Welcome to User Data Page 🧱📚</h1></center>
<br>
<br>
<br>


	<div class="search">
	<form method="post" action="searchidandname.php">
    <select name="cbosearch">
    	<option>Email</option>
    	<option>First Name</option>
        <option>Last Name</option>
        <option>Registeration No</option>
    </select>
	<input type="text" name="txtsearch" placeholder="Type to Search" />
    <input type="submit" name="cmdsearch" value="Search" class="btn btn-info" />
    </form>
    </div>
    <br>
    <br>
    <form action="signup.php" method="POST">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" value="Add User" name="add" class="btn btn-success"><br><br> 
    </form>
	<table>
    	<tr>
            <th>Email</th>
            <th>User Stat</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Registration Number</th>
    	</tr>
        <?php
			include "config.php";
            $query="SELECT email,user_stat,first_name,last_name,reg_no FROM login_data";
            $sql=mysqli_query($con,$query) or die(mysqli_error($con));
			while($tr=mysqli_fetch_array($sql))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
            <td align="center"><a href="Delete_Form.php? txtid=<?php echo $tr[0];?>" title="delete" class="btn btn-danger" onclick="return confirm(' Are you sure you want to delete this user ⁉')">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Form.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>  
       
        </tr>
        <?php
			}
		?>
		
    </table>
</body>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("td").attr("txtid");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>
</html>