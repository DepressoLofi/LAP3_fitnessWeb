<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="CSS/aboutpg.css">
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>

<body>
  <section>
    <div class="header">
      <nav>
        <h2 class="logo">PlaceHolder</h2>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="plan.php">Plan</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>

        </ul>
        <button class="nav-button">Log in</button>
      </nav>


      <div class="description">
        <h1>About Us</h1>
      </div>
    </div>
  </section>

  <section class="sec-01">
    <div class="container">
      <h2 class="main-title">PlaceHolder</h2>
      <div class="content">
        <div class="image">
          <img src="images\about (2).jpg">
        </div>
        <div class="text-box">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section class="sec-03">
    <h2 class="title">PlaceHolder</h2>
  </section>

  <section class="sec-02">

    <div class="container2">


      <div class="card">

        <div class="imgBx">
          <img src=".\images\img1.jpg">

        </div>
        <div class="content2">
          <h2>Meow1</h2><br>
          <h3>idk</h3>
          <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src=".\images\img2.jpg">

        </div>
        <div class="content2">
          <h2>Meow2</h2><br>
          <h3>idk</h3>
          <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src=".\images\img3.jpg">

        </div>
        <div class="content2">
          <h2>Meow3</h2><br>
          <h3>idk</h3>
          <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>

    </div>

  </section>



  <div id="section4">
    <div class="container1">
      <div class="row">
        <div class="col">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, . Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
        <div class="col">
          <h3>Office <div class="underline"><span></span></div>
          </h3>
          <p>blah Road</p>
          <p>blahblah,blah</p>
          <p>blahblahblah</p>
          <p class="email-id">blahblah@gmail.com</p>
          <h4>+95-1234567</h4>

        </div>
        <div class="col">
          <h3>Links <div class="underline"><span></span></div>
          </h3>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Plans</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="col">
          <h3>NewsLetter <div class="underline"><span></span></div>
          </h3>
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


  <script>
    ScrollReveal({
      reset: true,

      distance: '60px',
      duration: 2500,
      delay: 400

    });
    ScrollReveal().reveal('.main-title', {
      delay: 500,
      origin: 'left'
    });
    ScrollReveal().reveal('.sec-01 .image', {
      delay: 600,
      origin: 'bottom'
    });
    ScrollReveal().reveal('.text-box', {
      delay: 700,
      origin: 'right'
    });
    ScrollReveal().reveal('.title', {
      delay: 600,
      origin: 'bottom'
    });
    ScrollReveal().reveal('.card', {
      delay: 700,
      origin: 'bottom'
    });
  </script>


</body>

</html>