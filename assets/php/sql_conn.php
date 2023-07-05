<?php
	if($_SERVER['HTTP_HOST'] == 'localhost'){
		$host = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'my_chember';
	}else{	
		$host = 'localhost';
		$username = 'pioneers_mychember';
		$password = 'mychember123';
		$dbname = 'pioneers_mychember';
	}
	$mysqli = new mysqli($host, $username, $password, $dbname);

	// Check connection
	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	}else{
		//echo "Connected Successfully";
	}

	$con = mysqli_connect($host, $username, $password, $dbname);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	session_start();
	
	/*echo "connected...";
	
	try {
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$sql = "CALL usp_validateuser('admin','bagnan')";
		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		die("Error occurred:" . $e->getMessage());
	}
		
	while ($r = $q->fetch()): 
		echo $r['SocietyNm'];
	endwhile;*/

	$title = 'myChember';
	$logo_text = 'myChember';

    $p_name = 'myChember';
	$logo = 'NewLogo.jpg';
	$ico = 'favicon.ico';
	
	

		 
?>
