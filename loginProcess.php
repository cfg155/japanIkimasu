<?php
session_start();
include 'process/connector.php';

$username = $_POST['username'];
$password = $_POST['password'];

echo $username.$password;

$sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password' LIMIT 1";
$result = mysqli_query($conn,$sql);
if($rows = mysqli_fetch_assoc($result)){
    if($rows['username'] == $username && $rows['password'] == $password){
        echo "connected";
        $_SESSION['username'] = $username;
        header("location: index.php");
    }
}else{
    header("location: login.php?=error");
}
?>