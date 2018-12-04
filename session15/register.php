<!DOCTYPE html>
<html>
<head>
	<title>Form register</title>
</head>
<body>
	<?php 
	if(isset($_POST['register'])) {
		echo "<pre>";
		//var_dump($_POST);
		//isset();
		var_dump($_POST['name']);
	} else {
		echo "chuaw submit";
	}
		
	?>
	<h1>Register form</h1>
	<form action="#" method="post">
		<p>Name:<input type="text" name="name"></p>
		<p>Username:<input type="text" name="username"></p>
		<p>Password:<input type="password" name="password"></p>
		<input type="submit" name="register" value="Register">
	</form>
</body>
</html>