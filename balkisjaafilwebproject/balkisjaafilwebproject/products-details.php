<?php

include 'config.php';

session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (isset($_POST['add_to_cart'])) {
    if (!isset($user_id)) {
        $message[] = 'You have to login or register first to shop with us!';
    }
 else{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
 
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart!';
    }

 }
}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>our shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>

<?php

$pid = $_GET['pid'];


$result = mysqli_query($conn, "SELECT * FROM product WHERE id = '$pid'") or die('query failed');
$row = mysqli_fetch_assoc($result);


$product_name = $row['name'];
$product_price = $row['price'];
$product_description = $row['description'];
$product_image = $row['image'];
?>


<!-- Display the product details -->
<section class="product-details">
    <h3 class="title"><?php echo $product_name ?></h3>
    <form method="POST" action="">
    <div class="product-container">
 
        <div class="product-image">
            <img src="images/<?php echo $product_image ?>" alt="" height="500">

        </div>
        <div class="product-info">
            <p class="price"><?php echo $product_price ?>$</p>
            <p class="description"><?php echo $product_description ?></p>
            <input type="number" min="1" name="product_quantity" value="1" class="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            <input type="hidden" name="product_name" value="<?php echo $product_name ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_image" value="<?php echo$product_image ?>">
        </div>
    </div>
</form>
</section>




<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>