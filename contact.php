<?php
// Include your configuration file and establish a database connection
@include 'config.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get form data
    $senderName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $senderEmail = mysqli_real_escape_string($conn, $_POST['email']);
    $messageContent = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert the message into the database
    $insertQuery = "INSERT INTO messages (sender_name, sender_email, message_content) 
                    VALUES ('$senderName', '$senderEmail', '$messageContent')";
    
    if (mysqli_query($conn, $insertQuery)) {
        // Message inserted successfully
        echo '<script>alert("Message sent successfully.");</script>';
    } else {
        // Error occurred while inserting the message
        echo '<script>alert("Error sending message. Please try again later.");</script>';
    }
}


// Close the database connection
mysqli_close($conn);
?>








<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="contact.css">
<title>Contact</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css">
 <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&display=swap" rel="stylesheet">
 <script src="https://unpkg.com/scrollreveal"></script>
<script src="https://kit.fontawesome.com/c4254e24a8.js" ></script>
</head>
<body>
  <section>
 <div class="header">
     <nav>
      <h2 class="logo">PlaceHolder</h2>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="plan.html">Plan</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
        
      </ul>
      <a href="login.html">
        <button class="nav-button">Log in</button>
      </a>
     </nav>
   
  
        <div class="description">
          <h1>Contact Us</h1>
       
        </div>
        
      </div> 
    </section>

    <section class="contact">
       <div class="container">
         <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>blahblah Road, <br> blahblah,blah,Myanmar</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+95 1234567</p>
                </div>
         </div>
         <div class="box">
            <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Email</h3>
                <p>blahblah.gmail.com</p>
            </div>
         </div>
       
       </div>
      
       <div class="contactForm">
        <div class="box">
            <form method="post" action="contact.php"> <!-- Add action attribute with the PHP file name -->
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="fullName" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="message" required="required"></textarea>
                    <span>Enter Message</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
     

       </form>
      </div>
      </div>
      
    </section>

    <div id="section4">
      <div class="container1" >
     
        <div class="row">
           <div class="col">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, . Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 

           </div>
           <div class="col">
            <h3>Office <div class="underline"><span></span></div></h3>
            <p>blah Road</p>
            <p>blahblah,blah</p>
            <p>blahblahblah</p>
            <p class="email-id">blahblah@gmail.com</p>
            <h4>+95-1234567</h4>
        
           </div>
           <div class="col">
            <h3>Links <div class="underline"><span></span></div></h3>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Plans</a></li>
              <li><a href="">Contact</a></li>
            </ul>
           </div>
           <div class="col">
            <h3>NewsLetter <div class="underline"><span></span></div></h3>
            <?php include('newsletter.php'); ?>
            <div class="form1">
              <i class="far fa-envelope"></i>
              <input type="emial" placeholder="Enter your email address" required>
               <button type="submit"><i class="fas fa-arrow-right"></i></button>
            
             
            
              </div>
            <div class="social-icons">
              <i class="fab fa-facebook-f"></i>
              <i class="fa-brands fa-x-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
           </div>
        </div>

        <hr>
        <p class="copyright">PlaceHolder &copy; 2023 - All Rights Reserved</p>
     

      </div>
    </div>
    </section>

   

</body>

</html>
<?php
 