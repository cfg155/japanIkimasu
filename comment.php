<?php
    session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
        }else{
        $cache = "annonymous";
    }
    $link = $_POST['link'];
    $comment = $_POST['comment'];
    $date = date("Y-m-d");
 
$sql = "INSERT INTO comment VALUES ('','$link','$cache','$comment','$date')";
if(mysqli_query($conn,$sql)){   
    echo "Inserted";
}else{
    echo "not inserted";
}
header("location: detailForum.php?forum=$link");
    
?>