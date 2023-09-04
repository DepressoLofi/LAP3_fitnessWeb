<?php
// Include your configuration file and establish a database connection
@include 'config.php';


// Check if the form was submitted
if (isset($_POST['newsletter_submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['newsletter_email']);

    // Check if the email is not empty
    if (!empty($email)) {
        // Check if the email is not already subscribed
        $checkQuery = "SELECT * FROM newsletter_subscribers WHERE email = '$email'";
        $result = $conn->query($checkQuery);


