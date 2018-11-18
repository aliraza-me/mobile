<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'pk_app';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
$site_url = 'http://localhost/instt/';
?>
