<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
    header('locationcartt.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
}

if(isset($_POST['update_quantity'])){
    $cart_id = $_POST['cart_id'];
    $cart_quantity = $_POST['cart_quantity'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
    $message[] = 'Cart Quantity Updated!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>

    <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- custom admin css file link  -->
<link rel="stylesheet" href="css/style.css">

<script src="https://unpkg.com/scrollreveal"></script>


</head>
<body>

<?php @include 'header.php'; ?>

<section class="heading">
    <h3 class="shopping">Shopping cart</h3>
    <p class="shopping2"> <a href="home.php">Home</a> / Cart </p>
</section>

<section class="shopping-cart">

    <h1 class="title">Products added</h1>
    
    <div class="box-container">

        <?php
            $grand_total = 0;
            $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id' ") or die ('query failed');
            if(mysqli_num_rows($select_cart) > 0){
                while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                
                ?>
                <div class="box">
                    <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
                    <a href="view_page.php?pid=<?php echo $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
                    <img src="uploaded.img/<?php echo $fetch_cart['image']; ?>" alt="" class="image">
                    <div class="name"><?php echo $fetch_cart['name']; ?></div>
                    <div class="price">PHP <?php echo $fetch_cart['price']; ?>/-</div>
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $fetch_cart['id']; ?>" name="cart_id">
                        <input type="number" min="1" value="<?php echo $fetch_cart['quantity']; ?>" name="cart_quantity" class="qty">
                        <input type="submit" value="update" class="option-btn" name="update_quantity">
                    </form>
                    <div class="sub-total">Sub total : <span><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></span></div>
                </div>
                <?php
                 $grand_total += $sub_total;
                } 
            }else{
                echo '<p class="empty"> Your cart is empty! </p>';
            }
        ?>
    </div>

    <div class="more-btn">
    <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled' ?>" onclick="return confirm('delete all from cart?');">Delete All</a>
    </div>

    <div class="cart-total">
        <p>Grand total : <span>PHP <?php echo $grand_total; ?>/-</span></p>
        <a href="shop.php" class="btn">Continue Shopping</a>
        <a href="checkout.php" class="option-btn <?php echo ($grand_total > 1)?'':'disabled' ?>">Proceed to Checkout</a>
        
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

       ScrollReveal().reveal('.shopping', { delay: 200, origin: 'left' });
       ScrollReveal().reveal('.shopping2', { delay: 200, origin: 'right' });
       ScrollReveal().reveal('.title', { delay: 200, origin: 'top' });

</script>
    
</body>
</html>