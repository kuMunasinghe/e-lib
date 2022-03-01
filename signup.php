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
.login-form {
            width: 400px;
            margin: 50px auto;
            font-size: 15px;
            border-radius: 25px;
            }  
            .login-form form {
                margin-bottom: 15px;
                background: #ffffff;
                padding: 30px;
                border-radius: 25px;
            }
            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: auto;
            }
            
            .h1,h4{
                text-align: center;
            
            }
   

</style>
</head>
<body background="Images/account/loginbg.jpg">
  <br><br><br><br><br>


<div class="sidenav">
  <br><br><br>
  <a >Users 👥</a>
  <a href="books.php">Books 📚</a>
  <a href="logout.php">Log Out ❌</a>
</div>

<div class="main">
<br>
    <br>
<div class="overlay">
<h1 class="display-4" style="color:white;font-weight:600;text-align: center;">User Registeration 📚 </h1>
    <h1 style="text-align: center;">
    <h4 style="color:yellow;">Please Enter the User Information</h4>
    <div class="login-form" style="text-align: center;">
    <form action="add.php" method="POST">
    <label>E-M@il 📧</label>
    <input type="text" class="form-control" name="email"><br>
<br>
    <label>Enter Password 🔒</label>
    <input type="password" class="form-control" name="pwd"><br>
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname"><br>
    <label>Last Name</label>
    <input type="text"  class="form-control" name="lastname"><br>
    <label>Registration Number <a style="color: red;"><br>⚠ input format :D/BIT/##/####</a></label>
    <input type="text"  class="form-control" name="reg_no"><br>
    <label>User Type</label><br>
    <select name="userstat">
    	<option>Admin</option>
    	<option>User</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Sign Up" name="reg" class="btn btn-outline-primary btn-lg">
    </form>
    </div>
    </div>
    <center>
    <a href="admin.php" title="Go Back" class="btn btn-warning btn-lg" >Go Back to Main Page</a> 
    </center>
    <br>


</div>

</body>
</html>
<?php
include ('footer.php');
?>