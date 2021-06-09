<?php
require("./Database.php");
session_start();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$dbusername = $_SESSION["value"]["username"];
$dbpassword =  $_SESSION["value"]["password"];
$name = $_SESSION["value"]["name"];
$surname = $_SESSION["value"]["surname"];
$occupation = $_SESSION["value"]["occupation"];
$email = $_SESSION["value"]["Email"];

var_dump($_SESSION["value"]);

$sql2 = "SELECT * FROM userdetails WHERE email = '$email' AND passwordChr ='$dbpassword' ";


$result = $conn->query($sql2);

if (!$result) {
  trigger_error('Invalid query: ' . $conn->error);
}
if($result->num_rows == 0) {
     echo "No Match here";
         mysqli_query($conn, $sql) ;
         
           $_SESSION["value"]["error"] = "No matching Record";
           header('Location: http://localhost/SESSION/logout.php');
        
      
} else {
        $Rows = $result -> fetch_Object();
        var_dump($Rows);
        $_SESSION["value"]["id"]= $Rows->id;
        $_SESSION["value"]["username"] = $Rows->username;
        $_SESSION["value"]["name"] = $Rows->firstname;
        $_SESSION["value"]["surname"] = $Rows->lastname;

        //print_r($_SESSION["value"]);
        header('Location: http://localhost/SESSION/homepage.php');
        exit;
        
}

  $conn->close();
?>