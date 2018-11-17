<?php

if(isset($_POST['submit'])){
	include 'dbh.php';

	$title = mysqli_real_escape_string($connection, $_POST['notice_title']);
	$body = mysqli_real_escape_string($connection, $_POST['notice_body']);

	if (empty($title) || empty($body)){

	header("Location: ../admin_login.php?login=empty");
exit();

	}else{
		$sql = "INSERT INTO notice (notice_title, notice_body) VALUES ('$title', '$body');";
		mysqli_query($connection, $sql);

		header("Location: ../notice.php?notice successfully added");
	}

}else{
	header("Location: ../admin_login.php?login=error");
exit();
}