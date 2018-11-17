<?php

session_start();

if(isset($_SESSION['u_id'])){
  echo'<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>

<form action="includes/edit_notice.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">NOTICE TITLE</label>
    <input type="text" class="form-control" name="notice_title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Notice Title Here">
  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1">NOTICE BODY</label>
    <textarea class="form-control" name="notice_body" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<form action="includes/logout.php" method="GET">
  <button type="submit" class="btn btn-danger" name="logout">LOGOUT</button>
</form>
</body>
</html>
';
}


?>

