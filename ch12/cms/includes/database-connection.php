<?php
$type = 'mysql';
$server = 'localhost';
$db = 'phpbook';
$port = '3306';
$charset = 'utf8mb4'; 
$username = 'phpbook_admin';
$password = 'phpbook'; 
$options = [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
//$dsn = "$type:host=$server;dbname=$db;charset=$charset";
try{
	$pdo = new PDO($dsn, $username, $password, $options); 
} catch (PDOException $e){
	include 'database-troubleshooting.php'; 
	//throw new PDOException($e->getMessage(), $e->getCode()); 
}
