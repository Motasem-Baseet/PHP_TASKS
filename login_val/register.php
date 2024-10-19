<?php
session_start();
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
$fullName = trim($_POST['fullName']);
$email = trim($_POST["email"]);
$mobile = trim($_POST['mobile']);
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$day = (int)$_POST['day'];
$month = (int)$_POST['month'];
$year = (int)$_POST['year'];


if (str_word_count($fullName) < 4){
  $error[] ="You must enter your full name" ;
}

if (!filter_var($email , FILTER_VALIDATE_EMAIL)){
  $error[] = "Please enter valid email address";
}

if (strlen($mobile) < 10){
  $error[] = "number must at least 10 digits";
}

if (strlen($password) < 8){
  $error[] = "Password must be at least 8 char";
}if(!preg_match('/[A-Z]/',$password)){
  $error[] = "Password must has at least one uppercase char";
}if (!preg_match('/[0-9]/',$password)){
  $error[] = "Password must has at least one number";
}

if ($password !== $confirmPassword){
  $error[] = "Password do not match";
}

$currentYear = date("Y");
$currentMonth = date("m");
$currentDay = date("d");

$age = $currentYear - $year;
if ($age < 16){
  $error[] = "You must at least 16 years old";
}

if (empty($error)){
  echo "register successfully";
}

$_SESSION['success'] = "Registration successful! Please log in.";

header("Location: login.php?success=1");
exit();
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            background-color: #f0f2f5;
            background: linear-gradient(90deg, rgba(0, 123, 255, 1) 0%, rgba(0, 255, 234, 1) 100%);
            
        }
        .gradient-custom {
        }
        .card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 1rem;
        }
        h2 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .form-control {
            background-color: #333;
            color: white;
            border: none;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #0dcaf0;
        }
        .btn-outline-light {
            background-color: #0dcaf0;
            border-color: transparent;
        }
        .btn-outline-light:hover {
            background-color: #0bb5e0;
        }
        .alert-danger {
            background-color: rgba(255, 0, 0, 0.2);
            border-color: #ff0000;
        }
        .text-white-50 {
            color: rgba(255, 255, 255, 0.7) !important;
        }
        .dob-container {
            display: flex;
            justify-content: space-between;
        }
        .dob-container input {
            width: 30%;
        }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Sign-Up</h2>
              <p class="text-white-50 mb-5">Please fill in your details!</p>
              
              <?php if (!empty($error)): ?>
                  <div style="color:white" class="alert alert-danger">
                    <?php foreach ($error as $errors): ?>
                      <p><?php echo htmlspecialchars($errors); ?></p>
                      <?php endforeach; ?>
                  </div>
                  <?php endif; ?>

              <form method="POST" action="">
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeNameX" name="fullName" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeNameX">Full Name (fname, middle, last, family)</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="tel" id="typeMobileX" name="mobile" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeMobileX">Mobile (10 digits)</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typeConfirmPasswordX" name="confirmPassword" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeConfirmPasswordX">Confirm Password</label>
                </div>

                <div class="form-group mb-4">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <div class="dob-container">
                    <input type="number" id="day" name="day" class="form-control" placeholder="DD" min="1" max="31" required />
                    <input type="number" id="month" name="month" class="form-control" placeholder="MM" min="1" max="12" required />
                    <input type="number" id="year" name="year" class="form-control" placeholder="YYYY" required />
                  </div>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <p class="mb-0">Already have an account? <a href="./login.php" class="text-white-50 fw-bold">Log In</a></p>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>