<?php
session_start();
require_once 'db-connection.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user_t WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user['_password_'] === $password) {
            $_SESSION['email'] = $user['email'];

            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid Email or Password!";
        }
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>GYM GO</title>
</head>
<body>
    <header>
        <div class="head-container">
            <div>
                <img src="./Images/GYMGO.svg" width="160vw">
            </div>
            <div class="nav-content">
                <nav class="navbar">
                    <ul>
                        <a class="nav-item" href="./index.html">HOME</a>
                        <a class="nav-item" href="#">FEEDBACK</a>
                        <a class="nav-item" href="./product.html">PRODUCTS</a>
                        <a class="nav-item" href="./dashboard.html">DASHBOARD</a>
                        <a class="nav-item" href="./trainer.html">TRAINER</a>
                    </ul>
                </nav>
            </div>
            <div class="nav-button">
                <a href="./signup.html"><input class="top-button" type="button" value=" Sign Up"></a>
            </div>
            <div class="nav-button">
                <a href="./login.html"><input class="top-button1"   type="button" value="Log In"></a>
            </div>
        </div>
    </header>
    <div class="container1">
    <form method="POST" action="">
        <div class="log">
            <p class="in">LOG IN</p>
            <input class="enter" type="text" name="email" placeholder="Enter your email">
            <input class="enter" type="text" name="password" placeholder="Enter password">
            <button type="submit" class="logb">Sign in</button>
            <p class="sup">Don't have an account? <a class="sinup" href="./signup.html">Sign Up</a></p>
        </div>
    </form>
        

    </div>
</body>
</html>