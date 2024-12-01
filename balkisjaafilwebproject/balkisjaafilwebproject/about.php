<?php

include 'config.php';

session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> /About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/refashion-hires.jpg" alt="">
      </div>

      <div class="content">
         <h1>At ThriftingLove, we believe in a sustainable fashion future.</h1>
         <p>Thrifting is about more than just finding amazing deals on your favorite brands. It’s about shopping with intention, rejecting throwaway fashion culture, and standing for sustainability. The clothes we wear have the power to create change.</p>
         <a ></a>
      </div>

   </div>

</section>
<section class="about2">

   <div class="flex">

      <div class="content">
         <h1>OUR IMPACT</h1>
         <p>ThriftingLove does good for people and the planet.</p></br>
         <p>We give new life to millions of used clothes, offsetting the environmental and financial cost of fashion.</p>
      </div>

      <div class="image">
         <img src="images/people-walking.jpg" alt="">
      </div>

   </div>

</section>
<section class="about3">

   <div class="flex">

   <div class="image">
         <img src="images/dc.jpg" alt="">
   </div>


      <div class="content">
         <h1>OUR MISSION</h1>
         <p>Inspiring a new generation to think secondhand first.</p></br>
         
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>