<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

include('connection.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password ='$password'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("location: home.php");
        exit();
    } else {
        $error = "Invalid Username or password";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom right, #2980b9, #6dd5fa, #ffffff);
        }
        .container {
            background: linear-gradient(to bottom right, #f6e58d, #ffbe76, #ff7979);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.1);
            margin-top: 50px;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Page</h1>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputname" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
        <p class="mt-3">Don't have an account? <a href="registration.php">Register here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
