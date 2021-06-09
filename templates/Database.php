<?php

session_start();


$dbusername = $_SESSION["value"]["username"];
$dbpassword =  $_SESSION["value"]["password"];
$name = $_SESSION["value"]["name"];
$surname = $_SESSION["value"]["surname"];
$occupation = $_SESSION["value"]["occupation"];
$email = $_SESSION["value"]["email"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $sql = "CREATE TABLE UserDetails (
//     id INT(0) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     passwordChr VARCHAR(30) NOT NULL,
//     firstname VARCHAR(50),
//     lastname VARCHAR(50),
//     occupation VARCHAR(50),
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table UserDetails created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($conn);
//   }

// $sql = "INSERT INTO userdetails (username,passwordChr,firstname,lastname,occupation,email)
// VALUES ('$dbusername','$dbpassword', '$name', '$surname', '$occupation', '$email')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
  // $conn->close();
?>