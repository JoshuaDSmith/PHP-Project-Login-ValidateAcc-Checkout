<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require("./templates/Database.php");

$IDVALIDATION = $_SESSION['value']['id'];

if($_SESSION["value"] == null)
{
    header('Location: login.php');
    exit;
}
?>

<?php  include "./templates/Header.php"; ?>

//Issue with the code, sending files to the folder destination. TASK Rewatch video and see whats up

<?php

$msg="";

if(isset($_POST['upload'])) {
    $target = "./images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO profile (id,image, Description) VALUES ('$IDVALIDATION','$image','$text')";
   mysqli_query($conn, $sql); 
    $image ="";
    $text = "";
}

$sql = 'SELECT * FROM profile WHERE id = '.$IDVALIDATION.'';
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {

    $url = "./images/" .$row['image'];
    $number =  $row['number'];
    $Description = $row['Description'];

   
    $Display .= 
    "
                <div class='Column'>
                <td>$count </td>
                <td>$number</td>
                <td><a href='".$url."'><img style='width: 180px;height:180px;'  src='".$url."'/></a></td>
                <td>$Description</td>
            </div>
            <div>
                <td><button id='.$number.' class='MakeProfileButton Full'><i class='fas fa-check-circle'></i></button></td>
                <td><button id='$number' class='DeleteButton Full'><i class='fas fa-trash-alt'></i></button></td>
            </div>
  ";  
   
}
?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="./css/all.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>


<main>
    <div class="Quarter">
        <form method='post' enctype="multipart/form-data">
            <input type="hidden"
                name="size"
                accept="image/png, image/jpg"
                value="10000">
                <div class="Column">
                    <input type="file" name="image">     
                    <textarea name="text" cols="40" rows="4" placeholder="Optional: Add a Description"></textarea>   
                    <button type="submit" name="upload"> Submit </button>
                </div>   
        </form>
    </div>
    <div class="Mid  overflow">
        <table class="ColumnRow">
            <?php echo $Display; ?>
        </table>
    </div>
</main>

<script>


$('button').click(function() {
        //event.preventDefault(e)
        let targetter = event.target.parentNode.parentNode.parentNode.children[1];

        let Cookies = targetter.innerText;
      
       
        document.cookie = "DeleteCookie = " + Cookies;
        console.log(document.cookie)


});



</script>


<?php


$_COOKIE['DeleteCookie'];


print_r($_COOKIE);

$_SESSION["value"]["DeleteImage"] = $_COOKIE['DeleteCookie'];

print_r($_SESSION["value"]);

?>






<?php  include "./templates/Footer.php"; ?>