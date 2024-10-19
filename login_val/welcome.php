<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #343a40;
        }
        p {
            font-size: 1.2rem;
            color: #6c757d;
            max-width: 600px;
            margin: 0 auto;
        }
        .btn-primary, .btn-danger {
            width: 200px;
            font-size: 1.1rem;
            padding: 10px 20px;
            margin-top: 10px;
        }
        .button-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div>
        <header>
            <h1>Hello There!</h1>
            <p>Welcome to our website. Please log in or sign up to continue exploring amazing features.</p>
        </header>
        <div class="button-container text-center">
            <a class="btn btn-primary" href="./login.php">Log In</a>
            <a class="btn btn-danger" href="./register.php">Sign Up</a>
        </div>
    </div>
</body>
</html>
