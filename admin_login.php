<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2">
        <img src="logo.gif">
      </div>

      <style type="text/css">
        
      #header{
        color:grey;
        font-style: bold;
        font-size:50px;
        text-align: center;
      }
      #header-down{
         text-align: center;
          color: grey; 
          font-size: 30px;
      }
      </style>

      <div class="col-md-10">
        <h1 id="header">CELESTIAL BUDS HIGH SCHOOL</h1>
      
          <p id="header-down">Check-i-Kawoosa Narbal Kmr</p>
  
      </div>
    </div>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aboutus.html">History And Overview</a>
          <a class="dropdown-item" href="chairmansmsg.html">Chairman's Message</a>
          <div class="dropdown-divider"></div>
        </div>
        <li class="nav-item">
        <a class="nav-link" href="academics.html">Academics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.html">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="chairmansmsg.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admission
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admission1.html">Fee Structure</a>
          <a class="dropdown-item" href="admission2.html">Admission Proceedure</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admission3.html">Download Form</a>
        </div>
        <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_login.php">Login</a>
      </li>
      </li>
     </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">search</button>
    </form>
  </div>
</nav>
</div>


<div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
    
  

<div class="card" style="width: 1110;height:850px">
 <div class="card-body"><br>
<h5 class="card-title">ADMIN LOGIN</h5>

<form action="includes/login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>