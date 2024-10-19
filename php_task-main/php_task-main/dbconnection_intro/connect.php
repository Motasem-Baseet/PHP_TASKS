<?php
$host="localhost";
$dbname="lession_db";
$userName="root";
$password="";

$dsn="mysql:host=$host;dbname=$dbname";
// $dbConnection= new PDO($dsn,$userName,$password);
// echo ("connet secussefully");
try{
$dbConnection= new PDO($dsn,$userName,$password);
// echo ("connet secussefully");
}catch(PDOException $error){
// echo "not connect";
// echo $error;
// echo $error->getMessage();
echo $error->getCode();
}


?>
