
<?php
include('config.php');
include('headeradmin.php');
?>
<html>
    <head>
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
    <link rel="shortcut icon" href="favicon.png" />  
    <title>Library System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    
    <body>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="sidenav">
  <br><br><br>
  <a href="admin.php">Users 👥</a>
  <a >Books 📚</a>
  <a href="logout.php">Log Out ❌</a>
</div>

<div class="main">
<center>
            <h1>Book Upload Portal 🌐📚</h1>
            <br>
        <form enctype="multipart/form-data" action="upload.php" method="POST">
        <label>Book ID :</label>
        <input type="text" name="id">
        <br>
        <label>Choose a file to upload :</label>
        <input type="file" name="userfile"><br><br>
        <input type="submit" name="upload" value="Update" class="btn btn-primary btn-lg">

        </form>
        <br><br><br><br><br><br>
        <br>
        <a href="books.php" class="btn btn-light">Go Back</a>
</center>

</div>
     
    
    </body>
</html>