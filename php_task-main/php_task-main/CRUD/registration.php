
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="mt-4 card card-body shadow">

                    <h4>Register</h4>
                    <hr>

                    <form action="./reg_code.php" method="POST">

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label> Email</label>
                            <input type=" email" name="email" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>

                            <input type="password" name="password" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Confirm Password</label>

                            <input type="password" name="password2" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" name="reg_user" value="Add">
                        </div>
                        <div class="text-center">
                            <a href="login_code.php">Click here to Login</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>