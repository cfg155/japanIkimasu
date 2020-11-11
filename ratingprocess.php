<?php
    session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
     }else{
        $cache = "annonymous";
     }

     $ratingVal = $_POST['ratingValue'];
     $place = $_POST['place'];
     $ratingComment = $_POST['ratingComment'];
     $date = date("Y-m-d");


     echo $ratingVal;
     echo $place;
     echo $ratingComment;

$sql = "INSERT INTO rating VALUES ('','$place','$cache','$ratingVal','$ratingComment','$date')";
if(mysqli_query($conn,$sql)){   
    echo "Inserted";
}else{
    echo "not inserted";
}

header("location: detailProduct.php?place=$place");

?>