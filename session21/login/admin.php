<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
</head>
<body>
	<?php 
		if (!isset($_SESSION['login'])) {
			header("Location: login.php");
		}
	?>
	<h1>Admin page</h1>
	<a href="logout.php">Logout</a>
</body>
</html>