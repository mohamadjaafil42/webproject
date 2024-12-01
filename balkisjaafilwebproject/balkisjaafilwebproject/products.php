<?php

include 'config.php';

session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if(isset($_POST['add_to_cart'])){

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
   <h3>Shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>

<?php
// Get the category ID from the URL parameter
$cid = $_GET['cid'];

// Query the database for the products in the specified category
$result = mysqli_query($conn, "SELECT * FROM product WHERE catid = '$cid'") or die('query failed');
?>

<!-- Display the products in the category -->
<section class="products">
    <h3 class="title">Products</h3>
    <div class="product-container">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $pid = $row['id'];
            $product_name = $row['name'];
            $product_price = $row['price'];
            $product_image = $row['image'];
        ?>
            <div class="product">
                <a href="products-details.php?pid=<?php echo $pid ?>">
                    <img src="images/<?php echo $product_image ?>" alt="<?php echo $product_name ?>">
                    <p style="color: black " class="name"><?php echo $product_name ?></p>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>