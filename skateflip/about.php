<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- custom admin css file link  -->
<link rel="stylesheet" href="css/style.css">

<script src="https://unpkg.com/scrollreveal"></script>


</head>
<body>

<?php @include 'header.php'; ?>

<section class="heading">
    <h3 class="about">About Us</h3>
    <p class="about1"><a href="home.php">Home </a>/ About</p>
</section>

<section class="about">
    
<section class="sec-1">
    <div class="flex">

    <div class="image">
        <img src="images/bg.svg" alt="">
    </div>

    <div class="content">
        <h3 class="title1">Why choose us? </h3>
        <p class="title1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ullam in aspernatur reprehenderit cum illum delectus eligendi temporibus explicabo laboriosam!</p>
        <a href="shop.php" class="btn">Shop Now</a>
    </div>
</div>
</section>

<section class="sec-2">
<div class="flex">

    <div class="content">
        <h3 class="title2">What we provide?</h3>
        <p class="title2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ullam in aspernatur reprehenderit cum illum delectus eligendi temporibus explicabo laboriosam!</p>
        <a href="contact.php" class="btn">Contact Us</a>
    </div>

    <div class="image">
        <img src="images/bg1.svg" alt="">
    </div>
</div>
</section>

<section class="sec-3">
<div class="flex">
<div class="image">
    <img src="images/bg2.svg" alt="">
</div>

<div class="content">
    <h3 class="title3">Who are we? </h3>
    <p class="title3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ullam in aspernatur reprehenderit cum illum delectus eligendi temporibus explicabo laboriosam!</p>
    <a href="#reviews" class="btn">Clients Reviews</a>
    </div>
</div>
</section>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Client's reviews</h1>

    <div class="box-container">

    
        <div class="box1">
            <img src="images/client.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto optio necessitatibus mollitia distinctio ullam labore.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Cedrick Barotilla</h3>
        </div>

        <div class="box1">
            <img src="images/client2.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus nihil voluptate tempora culpa aut officiis, corporis cupiditate?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Venzon Natividad</h3>
        </div>

        <div class="box1">
            <img src="images/client3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptas iste sed tempore, explicabo sapiente!
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Johnlei Barneso</h3>
        </div>

        <div class="box1">
            <img src="images/client4.jpg" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur dolorem unde culpa vel recusandae cumque?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Hanzon Bantayan</h3>
        </div>

        <div class="box1">
            <img src="images/client5.jpg" alt="">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque tenetur recusandae alias autident, blanditiis molestiae quia ullam.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Jonh Ivan Ablazo</h3>
        </div>

</section>














<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>


<script>
   ScrollReveal({
       reset: true,
       distance:'60px',
       duration: 2000,
       delay: 100
       });

       ScrollReveal().reveal('.about', { delay: 200, origin: 'left' });
       ScrollReveal().reveal('.about1', { delay: 200, origin: 'right' });
       ScrollReveal().reveal('.title1, .title2, .title3', { delay: 100, origin: 'top' });
       ScrollReveal().reveal('.sec-1 .image', { delay: 500, origin: 'left' });
       ScrollReveal().reveal('.sec-2 .image', { delay: 500, origin: 'right' });
       ScrollReveal().reveal('.sec-3 .image', { delay: 500, origin: 'left' });
       ScrollReveal().reveal('.title', { delay: 100, origin: 'top' });
       ScrollReveal().reveal('.box-container .box1', { delay: 200, origin: 'bottom', interval: 100 });



</script>
    
</body>
</html>