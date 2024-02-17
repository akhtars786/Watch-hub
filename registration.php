<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom right, #2980b9, #6dd5fa, #ffffff);
        }

        .form-container {
            background: linear-gradient(to bottom right, #f6e58d, #ffbe76, #ff7979);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 form-container">
                <h1>Registration</h1>
                <form class="p-3" method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name</label>
                        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="examplePhone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <p class="mt-3">Already have an account? <a href="index.php">Login Page</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
