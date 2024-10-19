<?php
include "connect.php";
$sql="SELECT * FROM users";
$users=$dbConnection->query($sql);


echo "<ul>";
foreach($users as $user){
    echo "<li> User Name: ".$user["user_name"]. "<br> user Email".$user["user_email"]."</li>";
}
echo "</ul>";

?>