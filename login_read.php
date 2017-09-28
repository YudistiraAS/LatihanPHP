<?php
	
	$koneksi = mysqli_connect("localhost", "root", "", "belajar_loginapp");
	
	if($koneksi){
		echo "We re connected";
	}else{
		echo "connection failed";
	}
	
	$query="SELECT * FROM users";
	$result = mysqli_query($koneksi, $query);
	
	if(!$result){
		die('Query Failed' . mysqli_error($koneksi));
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
		<?php
		while($row= mysqli_fetch_assoc($result)){
		
			echo "<pre>";
			print_r($row);
			echo "</pre>";
			
		}
		?>
	</div>
</div>
		
</body>
</html> 