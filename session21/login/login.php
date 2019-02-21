<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php 
		if (isset($_POST['Login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			// check username va password trung voi username va password trong bang users moi cho login thanh cong
			// $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$_SESSION['login'] = $username;
			header("Location: admin.php");
		}
	?>
	<form action="login.php" method="POST">
		<p>Username <input type="text" name="username"></p>
		<p>Password <input type="password" name="password"></p>
		<p><input type="submit" name="Login" value="Login"></p>
	</form>
	<a href="admin.php">Admin page</a>
</body>
</html>