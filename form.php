<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	echo $username;
	echo "<br />";
	echo $password;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
	
<form action="form.php" method="post">
	<input type="text" name="username" placeholder="Enter Username" />
	<input type="password" name="password" placeholder="Enter Password" />
	<br />
	<input type="submit" name="submit" />
</form>


</body>
</html>
 
