<?PHP
IF(ISSET($_POST['SUBMIT'])){

	$NAME = ARRAY("ALEXWAWO", "MARIA", "JOHNDOE", "JANEDOE", "NATHAN");

	$MINIMUM = 5;
	$MAXIMUM = 10;

	$USERNAME = $_POST['USERNAME'];
	$PASSWORD = $_POST['PASSWORD'];

	IF(STRLEN($USERNAME) < $MINIMUM){
		ECHO "USERNAME HARUS MEMILIKI PANJANG 5 ATAU LEBIH";
	}

	IF(STRLEN($USERNAME) > $MAXIMUM){
		ECHO "USERNAME TIDAK BOLEH LEBIH PANJANG DARI 10";
	}

	IF(!IN_ARRAY($USERNAME, $NAME)){
		ECHO "MAAF, AKSES DITOLAK";
	}ELSE{
		ECHO "SELAMAT DATANG";
	}
}
?>
