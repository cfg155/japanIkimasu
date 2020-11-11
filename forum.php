<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum || </title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/forum.css">

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

        <div class="forum">
            <h1 style="text-align:center">Forum</h1>

            <div class="post-fr">
                <form action="forumpost.php" method="POST">
                    <input type="text" placeholder="Your title.." name="fr-title" class="fr-title" required>
                    <textarea name="fr" id="fr" cols="20" rows="10" placeholder="Write your Description..." required></textarea>
                    <button>Post</button>
                </form>
            </div>

            <!-- Prototype -->
            <?php
                $query = "SELECT * FROM forum";
                $result = mysqli_query($conn,$query);
                while($rows = mysqli_fetch_assoc($result)){
                    echo "<div class='forum-title'>";
                    echo    "<h4 class='forum-title-date'>".$rows['date']."</h4>";
                    echo    "<h1 class='forum-title-title'>".$rows['forumtitle']."</h1>";
                    echo    "<a href='detailForum.php?forum=".$rows['idforum']."' class='forum-link'>a</a>";
                    echo "</div>";
                }
            ?>
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

</body>
</html>

<script src="process/loginJs.js"></script>