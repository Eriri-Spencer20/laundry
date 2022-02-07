<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "localhost";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
}catch(PDOException $e){
    echo 'KONEKSI GAGAL' .$e -> getMessage();
}