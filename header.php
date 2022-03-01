<?php
include('config.php');

?>
<html>
    <head>
    <link rel="shortcut icon" href="favicon.png" />

    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/sticky-footer-navbar.css">
    <script src="CSS/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <img src="Images\account\crest.png" width="65" height="50" class="">
  <a class="navbar-brand">e-Libarary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
      <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      </li>
    </ul>
    <a href="logout.php" class="btn btn-danger my-2 my-sm-0" role="button" aria-pressed="true">LogOut</a>
    
  </div>
   
</nav>


    </body>
</html>