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

        if ($result->num_rows == 0) {
            // Email is not already subscribed, insert into the database
            $insertQuery = "INSERT INTO newsletter_subscribers (email) VALUES ('$email')";
            if ($conn->query($insertQuery) === TRUE) {
                // Subscription successful
                $message = "Thank you for subscribing to our newsletter!";
            } else {
                // Subscription failed
                $error = "Subscription failed. Please try again later.";
            }
        } else {
            // Email is already subscribed
            $message = "You are already subscribed to our newsletter.";
        }
    } else {
        // Email field is empty
        $error = "Email field cannot be empty.";
    }
}

// Close the database connection
$conn->close();
?>

<!-- Rest of your PHP code for processing the page -->

<!-- Display subscription status messages if set -->
<?php if (isset($message)) : ?>
    <div class="success-message"><?php echo $message; ?></div>
<?php elseif (isset($error)) : ?>
    <div class="error-message"><?php echo $error; ?></div>
<?php endif; ?>
