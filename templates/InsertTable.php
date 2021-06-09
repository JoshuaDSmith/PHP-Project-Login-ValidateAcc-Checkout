<?php

require("./Database.php");
session_start();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$dbusername = $_SESSION['value']['username'];
$dbpassword =  $_SESSION['value']['password'];
$name = $_SESSION['value']['name'];
$surname = $_SESSION['value']['surname'];
$occupation = $_SESSION['value']['occupation'];
$email = $_SESSION['value']['Email'];

var_dump($_SESSION["value"]);

$sql = "INSERT INTO userdetails (username,passwordChr,firstname,lastname,occupation,email)
VALUES ('$dbusername','$dbpassword', '$name', '$surname', '$occupation', '$email')";


$sql2 = "SELECT email FROM userdetails WHERE email = '$email'";


$result = $conn->query($sql2);

var_dump($result);

if (!$result) {
  trigger_error('Invalid query: ' . $conn->error);
}
if($result->num_rows == 0) {
     echo "No Match here";
         mysqli_query($conn, $sql) ;
         
             echo "New record created successfully";
             header('Location: http://localhost/SESSION/Homepage.php');
        
      
} else {
  echo "success";
  header('Location: http://localhost/SESSION/logout.php');
  exit;
        
}

  $conn->close();
?>