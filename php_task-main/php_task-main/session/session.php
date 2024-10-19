<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();
// initilization session
$_SESSION["newSession"]="first session in php";
// echo $_SESSION["newSession"];

// update session
$_SESSION["newSession"]=1234567890;
echo $_SESSION["newSession"];

// unset($_SESSION["newSession"]);
// echo $_SESSION["newSession"];

// if(isset($_SESSION["newSession"])){
//     echo "session is not empty";
// }else{
//     echo "session is empty";

// }
?>
</body>
</html>