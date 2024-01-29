<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>About</title>
     
     <!-- swiper link  -->
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file link  -->
    <link rel="stylesheet" href="./style.css">
 
</head>
<body>

<!-- header section start  -->
<section class="header">
    <a href="./home.html" class=" logo">Vp Tours</a>
    <nav class="navbar">
        <a href="home.html">Home </a>
        <a href="about.html">About </a>
        <a href="package.html">Package</a>
        <a href="book.php">Book </a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section end  -->

<div class="heading" style="background: url(./images/header-bg-3.png);">
    <h1>Book Now</h1>
</div>
<!-- booking section start  -->
 
<section class="booking">
    <h1 class="header-title">Book your trip!</h1>
    <form action="./book_form.php" method="post" class="book-form">
      <div class="flex">
          <div class="inputbox">
              <span>name :</span>
              <input type="text" placeholder="Enter your name" name=" name">
          </div>
          <div class="inputbox">
              <span>email :</span>
              <input type="email" placeholder="Enter your email" name=" email">
          </div>
          <div class="inputbox">
              <span>phone :</span>
              <input type="number" placeholder="Enter your phone no." name=" phone">
          </div>
          <div class="inputbox">
              <span>address :</span>
              <input type="text" placeholder="Enter your address" name="address">
          </div>
          <div class="inputbox">
              <span>where to :</span>
              <input type="text" placeholder="place you want to visit" name=" location">
          </div>
          <div class="inputbox">
              <span>how many:</span>
              <input type="number" placeholder="number of guests" name="guest">
          </div>
          <div class="inputbox">
              <span>arrivels:</span>
              <input type="date"  name="arrivel">
          </div>
          <div class="inputbox">
              <span>leaving:</span>
              <input type="date"  name="leaving">
          </div>
      </div>
     <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>


<!-- booking section ends -->


















<!-- footer section  -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> quick links</h3>
            <a href="home.html"><i class="fas fa-angle-right"></i> Home </a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About </a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book </a>
        </div>
        <div class="box">
            <h3> extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask question </a>
            <a href="#"><i class="fas fa-angle-right"></i> about us </a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy </a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
  </div>
        <div class="box">
            <h3>contact links</h3>
            <a href="#"><i class="fas fa-phone"></i> +707-707-7897 </a>
            <a href="#"><i class="fas fa-phone"></i> +123-343-5678 </a>
            <a href="#"><i class="fas fa-envelope"></i> vpcsc@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i>indapur, india - 413106 </a>
 </div>
 <div class="box">
     <h3>follow us</h3>
     <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
     <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
     <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
     <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>

 </div>
    </div>
 <div class="credit"> created by <span> vp-student </span> | all right reserved!</span></div>

</section>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- js file link  -->
    <script src="./script.js"></script>



</body>
</html>