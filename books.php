<?php

include('config.php');
include('headeradmin.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
  <br><br><br><br><br>


<div class="sidenav">
  <br><br><br>
  <a href="admin.php">Users 👥</a>
  <a >Books 📚</a>
  <a href="logout.php">Log Out ❌</a>
</div>

<div class="main">
<h1 style="text-align: center;">Books 📚⚙</h1>
    <br>
<br>
<br>


	<div class="search">
	<form method="post" action="booksearch.php">
    <select name="cbosearch">
    	<option>id</option>
    	<option>name</option>
    </select>
	<input type="text" name="txtsearch" placeholder="Type to Search" />
    <input type="submit" name="cmdsearch" value="Search" class="btn btn-info" />
    </form>
    </div>
    <br>
    <br>
    <form action="addbook.php" method="POST">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" value="Add Book" name="add" class="btn btn-success"><br><br> 
    </form>
	<table>
    	<tr>
            <th>id</th>
            <th>name</th>
            <th>storage</th>
           
    	</tr>
        <?php
			include "config.php";
            $query="SELECT * FROM books";
            $sql=mysqli_query($con,$query) or die(mysqli_error($con));
			while($tr=mysqli_fetch_array($sql))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td align="center"><a href="Delete_Book.php? txtid=<?php echo $tr[0];?>" title="delete" class="btn btn-danger" onclick="return confirm(' Are you sure you want to delete this book ⁉')">Delete</a> &nbsp <a class="btn btn-warning" href="Edit_Book.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>  
       
        </tr>
        <?php
			}
		?>
		
    </table>
</div>
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
<br>
<br>
<br>
<br>
</body>
</html>
<?php
include ('footer.php');
?>