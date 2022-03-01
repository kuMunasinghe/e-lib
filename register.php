<?php
include('headersignup.php');

?>
<html>
<head>
<title>SignUp for Library</title>
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<Style>
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
            
            .overlay 
            {
            background: linear-gradient(to right, rgba(0, 51, 50, 0.315), rgba(0, 78, 123, 0.301));
            display: grid;
            padding: 30px 0px;
            align-items: center;
            min-height: 100vh;
            }
            .h1,h4{
                text-align: center;
            
            }
   

</Style>
</head>
<body background="Images/account/loginbg.jpg">
    <br>
    <br>
<div class="overlay">
<h1 class="display-4" style="color:white;font-weight:600;text-align: center;">User Registeration 📚 </h1>
    <h1 style="text-align: center;">
    <h4 style="color:yellow;">Please Enter the User Information</h4>
    <div class="login-form" style="text-align: center;">
    <form method="POST" action="reg_action.php" >
    <label>E-M@il 📧</label>
    <input type="text" class="form-control" name="email"><br>
<br>
    <label>Enter Password 🔒</label>
    <input type="password" class="form-control" name="pwd"><br>
    <label>Confirm Password 🔒</label>
    <input type="password" class="form-control" name="cpwd"><br>
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname"><br>
    <label>Last Name</label>
    <input type="text"  class="form-control" name="lastname"><br>
    <label>Registration Number <a style="color: red;"><br>⚠ input format :D/BIT/##/####</a></label>
    <input type="text"  class="form-control" name="reg_no"><br>
    <input type="submit" value="Sign Up" name="reg" class="btn btn-outline-primary btn-lg">
    </form>
    <a href="account.php" class="btn btn-warning " role="button" aria-pressed="true">Already a Memeber ?</a>
    </div>
    </div>

</body>
</html>

<?php
include('footer.php');
?>
