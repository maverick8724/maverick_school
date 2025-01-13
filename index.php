<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'nav.php' ?>

    <?php //$page = 'Home'; $page = include 'index.php' ?>

<section class="section1">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/female-teacher-checking-temperature-each-student.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome to SCHOOL NAME, we're glad youre here.</h5>
        <a href="">Enroll Now</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/female-teacher-talking-with-students.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We promote acedemic excellence and individual growth.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/girl-boy-having-fun-with-school-supplies.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>




<section class="section2">
    <h2>''</h2>
<div class="div1">
<p>Our mission is to establish a learning environment based on the principles of self-discipline and respect where each child may develop the skills necessary to help them succeed honorably in a rapidly changing world through the use of the academically focused Core Knowledge Curriculum buttressed by strong parental involvement. </p>
</div>
</section>




<section class="section3">

<div class="div1">

<img src="images/Wedding Dress.jpg" alt="">

</div>

<div class="div2">

<p>The best schools are fun, supportive and inspirational environments for young enquiring minds. School Name High School is all of that and more.

Academically high-achieving, rounded and responsible, School Name is as down-to earth as it is dynamic.

We have an ethos of ‘modern scholarship’ which makes learning challenging, fun and relevant. Lessons are inspiring, exploring everything from entrepreneurship and oracy to designing a sustainable future.

For us, wellbeing is key to everything, from innovative Biophilic Classroom design to our Breathe environmental programme.

Whoever they are or want to be, students build friendships and develop their intellect knowing they are valued and have the opportunity to make a difference.</p><br>

<a href="">Learn more</a>

</div>

</section>




<section class="section4">

<h3>APPLY TODAY</h3>
<p><span>with</span> SCHOOL NAME</p>

<div>

<a href="contact.php">Enroll</a>
<a href="contact.php">Contact Us</a>
</div>

</section>


<section class="section5">

<h1>LIFE AT OUR SCHOOL</h1>

<div class="div1">
<div class="div2">
    <img src="images/girl-boy-having-fun-with-school-supplies.jpg" alt="">
    <img src="images/South Africa, officially the Republic of South Africa.jpg" alt="">
</div>

<div class="div2">
    <img src="images/kids-playing-with-rope-medium-shot.jpg" alt="">
    <img src="images/New Charter School for Black Students Gets Approved in Denver After Initial Rejection.jpg" alt="">
</div>
</div>

</section>

<?php include "footer.php"?>
    
</body>
</html>