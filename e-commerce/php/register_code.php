<?php
require('./db_con.php');

if(isset($_POST['form_reg'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $address = $_POST['address'];


    if ($pass == $pass2 && strlen($pass) == strlen($pass2)){

        $query = "INSERT INTO `user_db` (`user_name` , `user_email` , `user_password` , `user_address`) VALUE (:user_name , :user_email , :user_password , :user_address)";
        $statment  = $dbconn->prepare($query);
        $data =[
            'user_name' => $fname,
            'user_email' => $email,
            'user_password' => $pass,
            'user_address' => $address,
        ];

        $statment->execute($data);
        echo "Register success";
        // header('location:dashboard.php?message=user add success');
    }else{
        echo "not match";
        exit();
    }





}


?>