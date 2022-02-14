<?php
session_start();
include "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../index.php?error=User Name is required");
		exit();
	} else if (empty($pass)) {
		header("Location: ../index.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $uname && $row['password'] === $pass) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['firstname'] = $row['fname'];
				$_SESSION['id'] = $row['id'];
				header("Location: dashboard.php");
				exit();
			} else {
				header("Location: ../index.php?error=Incorect User name or password");
				exit();
			}
		} else {
			header("Location: ../index.php?error=Incorect User name or password");
			exit();
		}
	}
} else {
	header("Location: ../index.php");
	exit();
}
