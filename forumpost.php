<?php
    session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
     }else{
        $cache = "annonymous";
     }
    $frTitle = $_POST['fr-title'];
    $desc = $_POST['fr'];
    $date = date("Y-m-d");

     echo $frTitle.$desc.$date;
$sql = "INSERT INTO forum VALUES ('','$frTitle','$date','$desc')";
if(mysqli_query($conn,$sql)){   
    echo "Inserted";
}else{
    echo "not inserted";
}

header("location: forum.php");

?>