<?php
	$host = "localhost";
	$user = "root";
	$pass = "cumlaude2018";
	$db   = "db_ninatour";
	
	$pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
	//Hanya TES
	/*if($pdo){
		echo "Koneksi ke DB Berhasil";
	}else{
		echo "Koneksi GAGAL";
	}*/
?>