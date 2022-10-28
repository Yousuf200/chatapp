<?php 

// Create connection
$conn = mysqli_connect("localhost", "root","", "aabbcc");

$user = $_POST['user']; 
$email = $_POST['email']; 
$message = $_POST['message'];

$sql = "insert into mesdsg_info ( user , email , message) values ('$user','$email','$message') ";

// $sql = "INSERT INTO 'mesdsg_info'('user','email','message') VALUES ('NAzeer','noobmasterpro1@gmail.com','manual entry this is') ";



if (mysqli_query($conn, $sql)) {
    echo "MESSAGE IS SENT";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

mysqli_close($conn);


?> 
