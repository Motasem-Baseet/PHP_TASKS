<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #009579;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #fff;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #009579;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: #009579;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #006653;
}
.signup{
    font-size: 17px;
    text-align: center;
}
.signup label{
    color: #009579;
    cursor: pointer;
}
.signup label:hover{
    text-decoration: underline;
}
</style>
</head>
<body>
    
    <?php
session_start();
unset($_SESSION["users"]);
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    if (!isset($_SESSION["users"])){
        $_SESSION["users"]=[];
}
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];


    $newUser =[
        "fullname" =>$fullname,
        "email"=> $email,
        "mobile"=> $mobile,
        "password"=> $password,
    ];
    $_SESSION["users"][]=$newUser;

}

function test_input($data) {
    $data = trim($data);            
    $data = stripslashes($data);     
    $data = htmlspecialchars($data); 
    return $data;
}
    $email = $emailErr = "";
   
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required"; 
        } else {
            $email = test_input($_POST["email"]); 
            if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
                $emailErr = "Invalid email format"; 
            }
        }
    }

    $mobile = $mobileErr = " ";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (empty($_POST["mobile"])){
            $mobileErr = "movile number is required";
        }else{
            $mobile = test_input($_POST["mobile"]);

            if(!preg_match("/^[0-9]{14}$/", $mobile)){
                $mobileErr = "mobile nuber must be exactly";
            }
        }
    }

    $fullname = "";
    $fullnameErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate full name
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full name is required";
    } else {
        $fullname = test_input($_POST["fullname"]);
        if (!preg_match("/^([a-zA-Z]+ )([a-zA-Z]+ )([a-zA-Z]+ )([a-zA-Z]+)$/", $fullname)) {
            $fullnameErr = "Full name must contain exactly 4 words with only letters";
        }
    }
}

$password = "";
$passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])(?!.*\s).{8,}$/", $password)) {
            $passwordErr = "Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, a special character, and have no spaces.";
        }
    }
}

        ?>



<div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
    <header>Login</header>
    <form method="POST" >
    <span class="error"><?php echo $emailErr; ?></span>
        <input type="email" name="email"  placeholder="Enter your email" required>
        <input type="password" placeholder="Enter your password" required>
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
    </form>
    <div class="signup">
        <span class="signup">Don't have an account?
        <label for="check">Signup</label>
        </span>
    </div>
    </div>
    <div class="registration form">
    <header>Signup</header>
    <form method = "POST">
    <input type="email" placeholder="Enter your email" required>
        <input type="text" name="mobile" placeholder="Enter your mobile" required>
        <span><?php echo $fullnameErr; ?></span>
        <input type="name" name="fullname" placeholder="Enter your full name" value="<?php echo $fullname; ?>" required>
        <input type="password" placeholder="Create a password">
        <input type="password" placeholder="Confirm your password">
        <input type="date" name="date" required>
        <input type="submit" class="button" value="">
    </form>
    <div class="signup">
        <span class="signup">Already have an account?
        <label for="check">Login</label>
        </span>
    </div>
    </div>
</div>

<?php
if (!empty($email) && empty($emailErr)) {
    echo "Valid email: " . htmlspecialchars($email);
}

if (!empty($mobile) && empty($mobileErr)) {
    echo "Valid mobile number: " . htmlspecialchars($mobile);
}

if (empty($fullnameErr) && !empty($fullname)) {
    echo "Full Name: " . htmlspecialchars($fullname);
}

if (empty($passwordErr) && !empty($password)){
    echo "pass invalid";
}
?>


</body>
</html>