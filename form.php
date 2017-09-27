<?php
if(isset($_POST['submit'])){
	echo "Form di submit.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
	
<form action="form.php" method="post">
	<input type="text" placeholder="Enter Username" />
	<input type="password" placeholder="Enter Password" />
	<br />
	<input type="submit" name="submit" />
</form>


</body>
</html>
