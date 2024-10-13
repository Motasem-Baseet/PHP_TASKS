<?php

$host = "localhost";
$dbname = "db1";
$userName = "root";
$password = "";


try {
    $dbConnection = new PDO("mysql:host=$host;dbname=$dbname", $userName, $password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // لتفعيل وضع الأخطاء
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
