<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Perform database query to validate credentials
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: home.php");
        exit();
    } else {
        echo "<script>alert('Login failed. Invalid username or password.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('https://img.freepik.com/free-photo/exploding-burger-with-vegetables-melted-cheese-black-background-generative-ai_157027-1734.jpg?t=st=1717053044~exp=1717056644~hmac=2d8ccb5c9fc6ef5e2c64edcc932d0f69d9ba1a51d85bfd4bebc40cbad5c59ca1&w=1380');
            margin: 0;
            padding: 0;

        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            padding: 30px;
            border: 1px solid #fff0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff0;
        }

        .login-container h2 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        .form-group input {
            margin-bottom: 10px;
        }

        .btn-primary {
            width: 100%;
        }

        form a {
            font-size: 23px;
            color: white;
            background-color: gray;
            font-family: monospace;
            position: relative;
            top: 23px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form method="post" action="login.php">
            <div class="form-group">

                <input type="text" name="username" class="form-control" placeholder="USERNAME" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="PASSWORD" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="../index.php">Go To Home</a>
        </form>
    </div>
</body>

</html>