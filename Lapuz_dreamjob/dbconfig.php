<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lapuz_dreamjob";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>