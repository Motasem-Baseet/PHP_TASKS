<?php
// $dns = 'mysql:host=localhost;dbname=coffee';
// $username = "root";
// $password = "";

$dbconn = mysqli_connect("localhost","root","","coffee")
or die("not connected")

// try{
//     $dbconn = new PDO($dns , $username , $password);
//     $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connection seccess";
// }catch (PDOEXCEPTION $e){
// echo "error". "<br>" .$e->getMessage();
// }



?>