<?php 
$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "hospital1";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "probleme connection" .$e->getMessage();
	exit();
}



?>


