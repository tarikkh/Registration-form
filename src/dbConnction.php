<?php

$host =  "localhost";
$user =  "root";
$database =  "etudiants";
$password =  "password";

try{
    $conn = new PDO("mysql:host=$host;dbname=$database;", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo"La connexion a échoué".$e->getMessage();
    exit;
}
?>