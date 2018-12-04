<!DOCTYPE html>
<html>
<head>
	<title>Form register</title>
	<style type="text/css">
		span {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$errName = $errUsername = $errPass = '';
	$name = $username = $password = '';
	if(isset($_POST['register'])) {
		$name     = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($name == '') {
			$errName = 'Please input your name';
		}
		if($username == '') {
			$errUsername = 'Please input your username';
		}
		if($password == '') {
			$errPass = 'Please input your password';
		}
	} 	
	?>
	<h1>Register form</h1>
	<form action="#" method="post">
		<p>Name:<input type="text" name="name" 
		value="<?php echo $name?>">
			<span><?php echo $errName;?></span>
		</p>
		<p>Username:<input type="text" name="username"
		value="<?php echo $username?>">
			<span><?php echo $errUsername;?></span>
		</p>
		<p>Password:<input type="password" name="password"
		value="<?php echo $password?>">
			<span><?php echo $errPass;?></span>
		</p>
		<input type="submit" name="register" value="Register">
	</form>
</body>
</html>