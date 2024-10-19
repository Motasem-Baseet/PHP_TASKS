<?php
include("conn.php");
session_start();
if(isset($_POST['login'])){

    $useremail=$_POST['email'];
    echo $useremail;
    $userpassword=$_POST['password'];
    echo $userpassword;
    $query="SELECT * FROM `crud` WHERE `user_email`=:user_email AND `user_password`=:user_password";

    $statment=$dbconnection->prepare($query);
    $statment->bindParam(':user_email',$useremail);
    $statment->bindParam(':user_password',$userpassword);

    $statment->execute();

try   {
    if($statment->rowCount()>0){
        $user=$statment->fetch(PDO::FETCH_ASSOC);
        $user_id=$user['user_id'];
        $_SESSION['user_loged']= $user_id;
        header('location:index.php');

    }else{
        header('location:login_code.php?message=wrong email or password');
    }}catch(PDOException $error){
        echo $error;
    }





}


?>