<?php

session_start();
//ADMIN LOGIN
if (isset($_POST['submit'])) {
	include 'dbh.php';

	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$pwd = mysqli_real_escape_string($connection, $_POST['password']);

	//error handlers
	//check if inputs are empty

	if (empty($username) || empty($pwd)) {
		header("Location: ../admin_login.php?login=empty");
        exit();
	 } else {
		$sql = "SELECT * FROM admin_login WHERE u_username='$username'";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 1 || $resultCheck < 1) {
			header("Location: ../admin_login.php?login=error");
            exit();
		 } else {
			if ($row = mysqli_fetch_assoc($result)) {
				
				if($pwd != $row[u_password]){
				
header("Location: ../admin_login.php?login=error");                   exit();
				 }elseif ($pwd == $row[u_password]) {
					//log in user here
					$_SESSION['u_id'] = $row['u_id'];
					$_SESSION['u_username'] = $row['u_username'];
				
					header("Location: ../notice.php?login=successfull(You Are Successfully Logged In)");
					exit();
                    }
                }
            }
        }
    }else {
header("Location: ../admin_login.php?login=error");
exit();
}
