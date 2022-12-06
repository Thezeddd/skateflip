<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-chevron-circle-down" onclick="this.parentElement.remove();"></i>
        </div>
        ';

    }
}


?>


<header class="header">

<div class="flex">

<a href="admin_pages.php" class="logo"> Admin<span>panel  <div id="admin_page.php" class="fas fa-snowboarding "></div></span></a>

<nav class="navbar">
    <a href="admin_pages.php">Home</a>
    <a href="admin_products.php">Products</a>
    <a href="admin_orders.php">Orders</a>
    <a href="admin_users.php">Users</a>
    <a href="admin_contacts.php">Message</a>
</nav>

<div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <div id="user-btn" class="fas fa-user-circle"></div>
</div>

<div class="account-box">
    <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
    <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
    <a href="logout.php" class="delete-btn">Logout</a>
    <div>New <a href="login.php">Login</a> | <a href="register.php">Register</a></div>
</div>

</div>



</header>