<?php 

$host = 'localhost';
$dbuser = "root";
$dbpassword = "";
$dbname = "ajax";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;user=$dbuser;password=$dbpassword");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection error: " . $e->getMessage());
}

//samo1234*
?>