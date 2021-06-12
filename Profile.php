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

<?php

    $msg="";

    if(isset($_POST['upload'])) {
        $target = "./images/" . basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO profile (id,image, Description) VALUES ('$IDVALIDATION','$image','$text')";
        mysqli_query($conn, $sql); 

        move_uploaded_file($_FILES['image']['tmp_name'], "images/$image");

        header("location: Homepage.php");
    }

    # SET RANGE PARAMETERS
    $INT1 = 1;
    $INT2 = 20;

    $sql = '
        SELECT * FROM profile WHERE id = ' . $IDVALIDATION . '
        LIMIT '. $INT1 .', ' . $INT2 . '
    ';
    $result = mysqli_query($conn, $sql);

    if ($result -> num_rows > 0 ) {
    while($row = $result -> fetch_assoc()) {

        $number = $row['number'];
        $url = "./images/" . $row['image'];
        $number =  $row['number'];
        $Description = $row['Description'];

    
        $Display .= "
            <div class='Column Padding'>
                <span><a onclick='DisplayID($number)'><img style='width: 100px;height:100px;'  src='" . $url . "'/></a></span>
                <span>$Description</span>
            </div>
        
    ";  
    }
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


<main class="">
    <span class="Quarter">
        <section class="">
            <form method='post' enctype="multipart/form-data">
                <input type="hidden"
                    name="file"
                    accept="image/png, image/jpg"
                    value="10000">
                    <div class="Column">
                        <input type="file" name="image">     
                        <textarea name="text" cols="40" rows="4" placeholder="Optional: Add a Description"></textarea>   
                        <button type="submit" name="upload"> Submit </button>
                    </div>  
            </form>
        </section>

        <span class="Green Row Flexwrap">
            <?php echo $Display; ?>
        </span>

         <span class="Center Row">
            <button class="Red">PREV</button>
           <button id="NextImages" class="Green">NEXT</button>
        </span>
    </span>
</main>

<script>

function DisplayID(prop) {
    console.log(prop);
}
// $('[data-objectid=1770]').attr('data-deleteTable', 'Campaign');

$('NextImages').click(function() {
console.log('hello');

});



</script>


<?php


$_COOKIE['DeleteCookie'];


print_r($_COOKIE);

$_SESSION["value"]["DeleteImage"] = $_COOKIE['DeleteCookie'];

print_r($_SESSION["value"]);

?>






<?php  include "./templates/Footer.php"; ?>