<?php 

$host = 'localhost';
$username = "root";
$password = "samo1234*";
$dbname = "ajax";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;user=$username;password=$password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection error: " . $e->getMessage());
}


?>