<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JapanIkimasu</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/detailProduct.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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

<!-- test 2 -->

    </div>
    <!-- Header End -->

    <div class="content">
        <?php
            $place = $_GET['place'];
            $query = "SELECT * FROM detailpackage WHERE idpackage = '$place'";
            $result = mysqli_query($conn,$query);
            while($rows = mysqli_fetch_assoc($result)){
        ?>        
        <div class="top-banner">
            <img src="<?php echo $rows['img'] ?>" alt="banner-top" class="top-banner">
        </div>

        <div class="detailDesc">
            <div class="top-detailDesc">
                <h1 style="text-align: center; margin:60px 0"><?php echo $rows['name'] ?></h1>


                <table> 
                    <tr>
                        <td><h3>Price</h3></td>
                        <td>:</td>
                        <td class="resizeCol"><h4><?php echo $rows['price'] ?></h4></td>
                    </tr>

                    <tr>
                        <td><h4>Description</h4></td>
                        <td>:</td>
                        <td class="resizeCol"><?php echo $rows['desc'] ?></td>
                    </tr>

                    <tr>
                        <td><h4>Departure Date</h4></td>
                        <td>:</td>
                        <td class="resizeCol"><h4 id="date"></h4></td>
                    </tr>

                </table>
            </div>

            <?php } ?>

            <div class="bottom-detailDesc">
                <table>
                    Contact Us for purchasing the package
                    <tr>
                        <td>Phone Number</td>
                        <td style="font-weight:bold;">062-6666666666</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Test -->
        <div class="rating">
            <h1 style="text-align:center">Rating</h1>
            <form action="ratingprocess.php" method="POST">
                <div class="post-rate">
                    <div class="rating-star">
                        <span class="fa fa-star-o fa-star"></span>
                        <span class="fa fa-star-o fa-star"></span>
                        <span class="fa fa-star-o fa-star"></span>
                        <span class="fa fa-star-o fa-star"></span>
                        <span class="fa fa-star-o fa-star"></span>                     
                    </div>
                    <input type="text" name="ratingValue" id="ratingValue" hidden>
                    <input type="text" name="place" value="<?php echo $place ?>" hidden>
                    <textarea name="ratingComment" id="" cols="30" rows="10" placeholder="Write your rating. . ."></textarea>
                    <button>Rate</button>
                </div>
            </form>


            <div class="view-rate-container">
                <?php
                    $place = $_GET['place'];
                    $query = "SELECT * FROM rating WHERE idpackage = '$place'";
                    $result = mysqli_query($conn,$query);
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "<div class='view-rate'>";
                        echo    "<h4 class='left-view-rate'>".$rows['memberName']."</h4>";
                        echo    "<div class='right-view-rate'>";
                        echo        "<div class='top-right-view-rate'>";
                        echo        "<h4 class='top-right-view-rate-date'>".$rows['date']."</h4>";
                        echo        "<div class='top-right-view-rate-stars'>";
                        echo            "<span class='fa fa-star'></span>";
                        echo            "<h4>".$rows['rate']."</h4>";
                        echo        "</div>";
                        echo    "</div>";
                        echo    "<p class='bottom-right-view-rate'>".$rows['comment']."</p>";
                        echo    "</div>";
                        echo "</div>";
                ?> 

                <?php } ?>

            </div>

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
<script>
    var today = new Date();
    today.setDate(today.getDate() + 7);
    console.log(today);

    var day = today.getDate();
    var month = today.getMonth()+1;
    var year = today.getFullYear();

    var dateFormat = day + "-" + month + "-" + year
    document.getElementById('date').innerHTML = dateFormat;

    // rating
    var stars = document.querySelector('.rating-star').children;
    for(let i=0; i<stars.length; i++){
        stars[i].addEventListener("mouseover",()=>{
            for(let j=0; j<stars.length;j++){
                stars[j].classList.remove("fa-star");
                stars[j].classList.add("fa-star-o");
            }

            for(let j=0; j<=i;j++){
                stars[j].classList.remove("fa-star-o");
                stars[j].classList.add("fa-star");
            }
            
            stars[i].addEventListener("click",()=>{
                ratingValue.value = i+1;
            })
        })
    }
</script>