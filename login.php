<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {


    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_name'] = $row['name'];
        header('location: home.html');
        exit(); // Add this line to stop further execution
    } else {
        $error[] = 'incorrect email or password!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <div class="box">
        <form action="login.php" method="post">
            <h2>Sign in</h2>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>


            <div class="inputBox">
                <input type="email" name="email" required="required"> <!-- Add email input field -->
                <span>Email</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>

            <div class="links">
                <a href="#">Forgot password</a>
                <a href="signup.php">Signup</a>
            </div>

            <input type="submit" name="submit" value="login">
        </form>
    </div>
</body>

</html>