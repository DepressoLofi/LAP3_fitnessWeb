<!DOCTYPE html>
<html lang="en">

<head>

  <title>Fitness Hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="./../assets/css/navbar.css" rel="stylesheet">
  <link href="./../assets/css/about.css" rel="stylesheet">


</head>

<body>
  <?php include_once "./../template/navbar.php"; ?>

  <!--About the Fitness Hub-->
  <div class="container">


    <div class="d-flex justify-content-center ">
      <h1 class="text-white description fw-bold mb-5">About Us</h1>
    </div>

    <section class="sec-01 mb-5">
      <div class="container ">
        <h1 class="text-white fw-bold mt-lg-3 mb-5 main-title">We are Fitness Hub...</h1>

        <div class="content d-lg-flex">
          <div class="image">
            <img class="aboutImage" src="./../assets/images/about.jpg">
          </div>
          <div class="text-box">

            <h3 class="text-white mb-4">About Fitness Hub</h3>
            <p class="text-white">At Fitness Hub, our mission is to inspire and empower individuals on their fitness journeys. Founded with a passion for health and wellness, our team is dedicated to providing evidence-based fitness resources, workout plans, nutrition guidance, and expert advice. We believe in inclusivity, community, and the transformative power of fitness. Whether you're a beginner or an experienced athlete, Fitness Hub is your trusted partner in achieving your fitness goals. Join us as we work together to make health and vitality accessible to all.</p>

          </div>
        </div>

      </div>
    </section>

    <!--Introducing the trainers -->
    <section class="sec-02">
      <h1 class="text-white fw-bold sub-title text-center">Meet the trainers</h1>

      <div class="mt-4 mt-lg-5 pt-lg-1">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-lg-3 mx-lg-4 my-3 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
              <img src="./../assets/images/Derek.jpg" class="card-img-top shadow" alt="trianer Derek">
              <div class="card-body">
                <h2 class="fw-bold">Derek</h2>
                <p class="fw-bold">Derek is here to help you achieve a buff physique and maximize your strength potential.</p><br>
                <div class="icons">
                  <a href="#"><i class="fab fa-facebook-f mx-2"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter mx-2"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram mx-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-3 mx-lg-4 my-3 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
              <img src="./../assets/images/Ruja.jpg" class="card-img-top shadow" alt="trianer Ruja">
              <div class="card-body">
                <h2 class="fw-bold">Ruja</h2>
                <p class="fw-bold">Specializes in helping women achieve their weight loss goals with personalized guidance and expertise.</p>
                <div class="icons">
                  <a href="#"><i class="fab fa-facebook-f mx-2"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter mx-2"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram mx-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-3 mx-lg-4 my-3 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
              <img src="./../assets/images/John.jpg" class="card-img-top shadow" alt="trianer John">
              <div class="card-body">
                <h2 class="fw-bold">John</h2>
                <p class="fw-bold">A trainer with an irresistible smile at Fitness Hub, who's ready to make your fitness journey enjoyable and effective.</p>
                <div class="icons">
                  <a href="#"><i class="fab fa-facebook-f mx-2"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter mx-2"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram mx-2"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>


    </section>


  </div>








</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
  ScrollReveal({
    reset: false,

    distance: '60px',
    duration: 2500,
    delay: 200

  });
  ScrollReveal().reveal('.main-title', {
    delay: 300,
    origin: 'left'
  });

  ScrollReveal().reveal('.sec-01 .image', {
    delay: 400,
    origin: 'bottom'
  });
  ScrollReveal().reveal('.text-box', {
    delay: 500,
    origin: 'right'
  });
  ScrollReveal().reveal('.sub-title', {
    delay: 600,
    origin: 'bottom'
  });
  ScrollReveal().reveal('.card', {
    delay: 700,
    origin: 'bottom'
  });
</script>

</html>