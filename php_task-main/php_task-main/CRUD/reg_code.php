<?php
require('conn.php');

if(isset($_POST['reg_user'])){
$fname=$_POST['name'];
// echo $fname;
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$password2=$_POST['password2'];


// INSERT INTO `crud`(`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
if($password == $password2 && strlen($password)== strlen($password2)){


$query="INSERT INTO `crud`(`user_name`, `user_email`, `user_mobile`, `user_password`) VALUES (:user_name,:user_email,:user_mobile,:user_password)";
$statment=$dbconnection->prepare($query);
$data=[
    'user_name' => $fname,
    'user_email' => $email,
    'user_mobile' => $phone,
    'user_password' => $password
];

$statment->execute($data);
header('location:index.php');
// header('location:index.php?message=user add sucessfully');
}
}else{
    echo "not match";
    exit();
}


?>