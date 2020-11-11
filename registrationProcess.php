<?php 
include "process/connector.php";

$fullname = $_POST['fn'];
$username = $_POST['un'];
$password = $_POST['pw'];
$email = $_POST['email'];
$radio = $_POST['gender'];
$dob = $_POST['dob'];

echo $fullname;
echo $username;
echo $password;
echo $email;
echo $radio;
echo $dob;

$sql = "INSERT INTO member VALUES ('$username','$password','$radio','$dob','$email','$fullname')";
if(mysqli_query($conn,$sql)){   
    echo "Inserted";
}else{
    echo "not inserted";
}

header("location: login.php");

?> 