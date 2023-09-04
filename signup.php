<?php
@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO users (name, email, password) VALUES('$name','$email','$pass')";
            
            mysqli_query($conn, $insert);
            header('Location: login.php');
            exit; // Exit to prevent further execution
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <h2>Sign Up</h2>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                }
            }
            ?>
            
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>Username</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="cpassword" required="required">
                <span>Confirm Password</span>
                <i></i>
            </div>

            <input type="submit" name="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
