<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <!-- Connecting -->
    <?php 
    session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
        echo "<p id='status' class='testLog'>logged</p>";
     }else{
        echo "<p id='status' class='testLog'>not logged</p>";
     }

    ?>

    <!-- Header -->
    <div class="header">
        <div class="header-top">
            <div class="logo"> 
                <a href="index.php">JapanIkimasu!</a>
            </div>
    
            <div class="login">
                <div class="notLogged">
                    <p><a href="login.php">Login</a><br>
                    Don't have account yet? <a href="register.php">Register Now</a></p>
                </div>

                <form action="logout.php" method="POST">
                    <div class="logged">
                        <p>Hi,<?php echo $cache; ?></p><br><a href="logout.php">Log Out</a> 
                    </div>
                </form>

            </div>
        </div>

        <div class="header-bottom">
            <div class="menu-link">
                <ul>
                    <li class="link-item li-sizing"><a href="index.php" class="link-item a-sizing">Home</a></li>
                    <li class="link-item li-sizing"><a href="feedback.php" class="link-item a-sizing">Feedback</a></li>
                    <li class="link-item li-sizing"><a href="forum.php" class="link-item a-sizing">Forum</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- Header End -->

    <div class="content">
        <div class="top-banner">
            <img src="assets/banner-top-edited.jpg" alt="banner-top" class="top-banner">
        </div>

        <div class="package">
            <h1 style="margin-bottom:50px">Package</h1>
            <div class="product">
                <div class="p-item">
                    <?php
                        $query = "SELECT * FROM detailpackage WHERE idpackage = '1'";
                        $result = mysqli_query($conn,$query);
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <img src="assets/kyotoIndex.jpg" alt="">
                    <div class="p-txt">
                        <h3 class="titlepr"><?php echo $rows['name'] ?></h3>
                        <h4 class="titlepr"><?php echo "Rp".$rows['price'] ?></h4>
                        <p><?php echo $rows['desc'] ?></p>
                    </div>
                    <a href="detailProduct.php?place=1" class="p-txt-link">lol</a>
                    <?php } ?>
                </div>

                <div class="p-item">
                    <?php
                        $query = "SELECT * FROM detailpackage WHERE idpackage = '2'";
                        $result = mysqli_query($conn,$query);
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <img src="assets/osakaIndex.jpg" alt="">
                    <div class="p-txt">
                        <h3 class="titlepr"><?php echo $rows['name'] ?></h3>
                        <h4 class="titlepr"><?php echo "Rp".$rows['price'] ?></h4>
                        <p><?php echo $rows['desc'] ?></p>
                    </div>
                    <a href="detailProduct.php?place=2" class="p-txt-link">lol</a>
                    <?php } ?>
                </div>

                <div class="p-item">
                    <?php
                        $query = "SELECT * FROM detailpackage WHERE idpackage = '3'";
                        $result = mysqli_query($conn,$query);
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <img src="assets/tokyoIndex.jpg" alt="">
                    <div class="p-txt">
                        <h3 class="titlepr"><?php echo $rows['name'] ?></h3>
                        <h4 class="titlepr"><?php echo "Rp".$rows['price'] ?></h4>
                        <p><?php echo $rows['desc'] ?></p>
                    </div>
                    <a href="detailProduct.php?place=2" class="p-txt-link">lol</a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="bottom-banner">
            <img src="assets/bottom3-edited.jpg" alt="" class="bottom-banner">
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-container">
        <div class="footer">
            <div class="footer-left">
                <div class="logo">
                    <a href="index.php">JapanIkimasu!</a>
                </div>
                <p>address</p>
                <p>Call</p>
            </div>

            <div class="footer-center">
                <ul class="footer-center">
                    <li class="footer-link-item"><a href="index.php" class="footer-link-item">Home</a></li>
                    <li class="footer-link-item"><a href="feedback.php" class="footer-link-item">Feedback</a></li>
                    <li class="footer-link-item"><a href="forum.php" class="footer-link-item">Forum</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <h4>Follow Us!</h4>
                <div class="sosmed">
                    <a href="#"><img src="assets/logo.png" alt="Facebook"></a>
                    <a href="#"><img src="assets/logo.png" alt="Instagram"></a>
                    <a href="#"><img src="assets/logo.png" alt="Twitter"></a>
                    <a href="#"><img src="assets/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <?php mysqli_close($conn) ?>
</body>
</html>

<script src="process/loginJs.js"></script>