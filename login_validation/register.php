<?php
session_start(); // Start session
include('db.php');

function test_input($data) {
    $data = trim($data);            
    $data = stripslashes($data);     
    $data = htmlspecialchars($data); 
    return $data;
}

$email = $emailErr = $mobile = $mobileErr = $fullname = $fullnameErr = $password = $passwordErr = $passConf = $passConfErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required"; 
    } else {
        $email = test_input($_POST["email"]); 
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
            $emailErr = "Invalid email format"; 
        }
    }

    // Mobile validation
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
    } else {
        $mobile = test_input($_POST["mobile"]);
        if (!preg_match("/^[0-9]{14}$/", $mobile)) {
            $mobileErr = "Mobile number must be exactly 14 digits";
        }
    }

    // Full name validation
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full name is required";
    } else {
        $fullname = test_input($_POST["fullname"]);
        if (!preg_match("/^([a-zA-Z]+ )([a-zA-Z]+ )([a-zA-Z]+ )([a-zA-Z]+)$/", $fullname)) {
            $fullnameErr = "Full name must contain exactly 4 words with only letters";
        }
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])(?!.*\s).{8,}$/", $password)) {
            $passwordErr = "Password must be at least 8 characters, include uppercase, lowercase, number, special character, and no spaces.";
        }
    }

    // Confirm Password validation
    if (empty($_POST["passConf"])) {
        $passConfErr = "Password confirmation is required";
    } else {
        $passConf = test_input($_POST["passConf"]);
        if ($passConf !== $password) {
            $passConfErr = "Passwords do not match";
        }
    }
    
    // Store in session if all fields are valid
    if(isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if(!empty($fullname) && !empty($email) && !empty($password)) {
            $sql = 'INSERT INTO users (user_id ,user_name, user_email, password) VALUES (:user_id, :user_name, :user_email, :password)';
    
            $stmt = $dbConnection->prepare($sql); // Use PDO prepare
            if ($stmt->execute([$fullname, $email, $password])) {
                echo "Data inserted successfully!";
            } else {
                echo "Failed to insert data.";
            }
        } else {
            echo "Please fill in all fields.";
        }
    }
    




    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        /* Styles */
        body { min-height: 100vh; background: #009579; display: flex; justify-content: center; align-items: center; }
        .container { width: 400px; background: #fff; border-radius: 7px; padding: 20px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3); }
        .container h2 { text-align: center; margin-bottom: 20px; }
        .container input { width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ddd; }
        .container input[type="submit"] { background-color: #009579; color: white; border: none; cursor: pointer; }
        .container input[type="submit"]:hover { background-color: #006653; }
        .error { color: red; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="./welcome.php" method="POST">
            <div class="error"><?php echo $emailErr; ?></div>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
            
            <div class="error"><?php echo $mobileErr; ?></div>
            <input type="text" name="mobile" placeholder="Enter your mobile" value="<?php echo $mobile; ?>" required>
            
            <div class="error"><?php echo $fullnameErr; ?></div>
            <input type="text" name="fullname" placeholder="Enter your full name" value="<?php echo $fullname; ?>" required>
            
            <div class="error"><?php echo $passwordErr; ?></div>
            <input type="password" name="password" placeholder="Create a password" required>
            
            <div class="error"><?php echo $passConfErr; ?></div>
            <input type="password" name="passConf" placeholder="Confirm the password" required>
            
            <input type="submit" value="Sign Up">
        </form>

        <div class="signup">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
