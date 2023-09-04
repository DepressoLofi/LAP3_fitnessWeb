<?php
// Include your configuration file and establish a database connection
@include 'config.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header('location: login.php'); // Redirect to the login page if not logged in
    exit();
}

// Retrieve user information from the database
$userName = $_SESSION['user_name'];

// Query to select user's profile information (including profile picture)
$selectQuery = "SELECT * FROM user_profiles WHERE user_id = (SELECT id FROM users WHERE name = '$userName')";
$result = mysqli_query($conn, $selectQuery);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

// Fetch the user's profile data
$userData = mysqli_fetch_assoc($result);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file -->
</head>

<body>
    <h1>User Profile</h1>
    <div class="user-details">
        <p>Name: <?php echo $userData['name']; ?></p>
        <p>Email: <?php echo $userData['email']; ?></p>
        <img src="<?php echo $userData['profile_picture']; ?>" alt="Profile Picture">
    </div>
    <div class="preferences">
        <!-- Display and allow users to edit their preferences -->
        <textarea><?php echo $userData['preferences']; ?></textarea>
        <button id="update-preferences">Update Preferences</button>
    </div>

    <!-- Add JavaScript to handle preference updates (AJAX or form submission) -->
    <script>
        // Example JavaScript code to handle preference updates
        document.getElementById('update-preferences').addEventListener('click', function() {
            var newPreferences = document.querySelector('.preferences textarea').value;

            // Send newPreferences to the server using AJAX or form submission
            // Update the 'user_profiles' table with the new preferences
            // Provide user feedback on success or failure
        });
    </script>
</body>

</html>