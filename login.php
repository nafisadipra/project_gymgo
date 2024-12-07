<?php
session_start();
require_once 'db-connection.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "Email and Password are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } else {
        $query = "SELECT * FROM user_t WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);

                if ($user['password_'] === $password) {
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    header("Location: dashboard.php");
                    exit;
                } else {
                    $error = "Invalid Email or Password!";
                }
            } else {
                $error = "Invalid Email or Password!";
            }
        } else {
            $error = "Database query error!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./login.css">
    <title>GYM GO</title>
</head>
<body>
    <header>
        <div class="head-container">
            <div>
                <img src="./img/GymGo.png" width="190vw" style="padding-left: 2vw; padding-top: 1vw">
            </div>
        </div>
    <div class="container1">
        <form method="POST" action="">
            <div class="log">
                <p class="in">LOG IN</p>
                <?php if (!empty($error)) : ?>
                    <p class="error" style="color: red;"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>
                <input class="enter" type="text" name="email" placeholder="Enter your email">
                <input class="enter" type="password" name="password" placeholder="Enter password">
                <button type="submit" class="logb">Sign in</button>
                <p class="sup">Don't have an account? <a class="sinup" href="./signup.html">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>