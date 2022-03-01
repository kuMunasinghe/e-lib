<?php 
	session_start();
	if(ISSET($_SESSION['email'])){
		header('location:index.php');
	}
    include('headersignup.php');

?>
<html>
    <head>
        <title>Library System</title>
        <link rel="shortcut icon" href="favicon.png" />  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style>
            .login-form {
            width: 400px;
            margin: 50px auto;
            font-size: 15px;
            border-radius: 25px;
            color: black;
            }  
            .login-form form {
                margin-bottom: 15px;
                background: blanchedalmond;
                padding: 30px;
                border-radius: 25px;
            }
            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: auto;
            }
            
            .overlay {
    background: linear-gradient(to right, rgba(0, 51, 50, 0.315), rgba(0, 78, 123, 0.301));
    display: grid;
    padding: 30px 0px;
    align-items: center;
    min-height: 100vh;
}
        </style>
    </head>
    <body background="Images/account/loginbg.jpg">
        <div class="overlay">
        <br>
        <br>
        <h1 class="display-4" style="color:white;font-weight:600;text-align: center;">Welcome to the e - Library</h1>
        <br>
        <img src="Images/account/crest.png" width="140" height="120" class="center">

        <div class="login-form" style="text-align: center;">
            <form action="validate_backup_test.php" method="POST">
                <h4>Please Enter the Login Credentials.</h4>
                <br>
                <input type="text" placeholder="UserID" class="form-control" name="email">
                
                <br>
                <input type="password" placeholder="Password" class="form-control" name="pwd"><br>
                <label class="float-left form-check-label"><input type="checkbox" value="1" name="rem"> Remember Me 💭</label>
                <br>
                <br>
                <input type="submit" value="LOGIN" name="login" class="btn btn-success btn-lg"><br><br>  
            </form>
           
        </div>
    </div>  
    </body>
</html>
<?php
include ('footer.php');
?>

