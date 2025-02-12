<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card-bg-light" style="width: 100%; max-width: 480px;">


                <div class="card-body">
                    <h2>Login</h2>
                    <form action="" method="post"> 
                    <label for="tbUsername">Username</label>
                    <input type="text" name="username" id="tbUsername" class="form-control">
                    <label for="tbPassword">Password</label>
                    <input type="password" name="password" id="tbPassword" class="form-control">
                    <button type="submit" name="submit" class="btn btn-primary mt-2 w-100"><i class="fa-solid fa-key"></i> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin123') {
        # code...
    }
}