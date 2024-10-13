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
include('db.php');

if (isset($_SESSION["users"])) {
    $lastUser = end($_SESSION["users"]);
    echo "Welcome: " . htmlspecialchars($lastUser["fullname"]);
} else {
    echo "No users found in the session!";
}

if (isset($_SESSION["users"])){

}
    
    ?>

    
</body>
</html>