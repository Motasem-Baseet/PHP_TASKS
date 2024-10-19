<?php
include('login_page.php')

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<div class="bg-dark text-light text-center">

    <h1>Login Page</h1>
</div>
<div class="container mt-5 row justify-content-center">
    <form action="login_page.php" method="post" class="col-md-6" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
            aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        
        <input type="submit" class="btn btn-primary" name="login" value="login">
        <a href="./registration.php" target="" rel="noopener noreferrer" class="btn btn-primary">
        Registration
        </a>
    </form>
</div>