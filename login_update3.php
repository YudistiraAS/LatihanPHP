<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php

if(isset($_POST['submit'])){
	$id			=$_POST['id'];
	$username	=$_POST['username'];
	$password	=$_POST['password'];
	
	$query = "UPDATE users
			  SET username = '$username',
				  password = '$password'
			  WHERE id = $id";
	$result = mysqli_query($koneksi, $query);
	
	if(!$result){
		die("Query failed.");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="col-md-6">
	<form action="login_update3.php" method="post">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control"/>
		</div>
		<div class="form-group">
			<select name="id" class="form-control">
				<?php
				showAllUserId();
				?>
			</select>
			</div>
			<input type="submit" name="submit" value="UPDATE" class="btn btn-primary" />
		</form>
	</div>
</div>
		
</body>
</html>
