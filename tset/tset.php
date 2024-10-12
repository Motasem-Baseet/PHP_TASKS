<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<?php
session_start();
unset($_SESSION["users"]);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (!isset($_SESSION["users"])){
        $_SESSION["users"]=[];
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $newUser=[
        "name"=>$name,
            "email"=>$email,
            "password"=>$password,
        ];
        $_SESSION["users"][]=$newUser;


}


    ?>


    <form method="POST">
        <label for="name">name<input type="name" name="name" required></label>
        <label for="email">Email<input type="email" name="email" required></label>
        <label for="password">Password<input type="password" name="password" required></label>
        <input type="submit">
    </form>

    <button id='hidebtn'>click to hide the content </button>

    <table id="table" border= "1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>pass</th>
            </tr>
            
            <?php foreach($_SESSION["users"] as $user)?>
            <tr>
                <td><?php echo $user ["name"]; ?></td>
                <td><?php echo $user ["email"]; ?></td>
                <td><?php echo $user ["password"]; ?></td>

            </tr>
    </table>
    
    <script>

        
        let btn = document.getElementById("hidebtn").addEventListener("click", ()=>{
            let form = document.getElementById("table");
            
            if (form.style.display === "none"){
                form.style.display = "block";
                }else{
                form.style.display="none";    
            }

        });


    </script>
</body>
</html>