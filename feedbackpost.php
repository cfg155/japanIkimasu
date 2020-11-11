<?php
    session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
     }else{
        $cache = "annonymous";
     }

    $desc = $_POST['fb'];
    $date = date("Y-m-d");


$sql = "INSERT INTO feedback VALUES ('','$cache','$desc','$date')";
if(mysqli_query($conn,$sql)){   
    echo "Inserted";
}else{
    echo "not inserted";
}

header("location: feedback.php");

?>