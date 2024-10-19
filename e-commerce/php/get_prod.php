<?php
include('db_con.php');
$stmt = $dbconn->prepare("SELECT * FROM item");
$stmt->execute();

$product = $stmt->get_result();
?>