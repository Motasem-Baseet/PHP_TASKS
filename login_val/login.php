<?php
session_start();
$successMessage = isset($_SESSION['success']) ? $_SESSION['success'] : '';
if (isset($_SESSION['success'])) {
  unset($_SESSION['success']);
}
$successMessage = isset($_POST['success']) ? "Registration successful! Please log in." : '';





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
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
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <?php if (!empty($errors)): ?>
                  <div class="alert alert-danger">
                      <?php foreach ($errors as $error): ?>
                          <p><?php echo htmlspecialchars($error); ?></p>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>

              <form method="POST" action="">
                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <p class="mb-0">Don't have an account? <a href="./register.php" class="text-white-50 fw-bold">Sign Up</a></p>
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
