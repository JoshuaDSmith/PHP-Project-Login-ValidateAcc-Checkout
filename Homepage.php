<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require("./templates/Database.php");


$UserName = $_SESSION['value']['username'];
if($_SESSION["value"] == null)
{
    
    header('Location: login.php');
    exit;

}


$date = new DateTime();
$DATE_NoonValue = strtotime('noon', $date);
$DATE_BaseTimeChecker =  $date->getTimestamp();

if($DATE_BaseTimeChecker >= $DATE_NoonValue)
{
    $STR_Message = "Good Afternoon";
} else 
{
    $STR_Message = "Good Morning";
}
 ?>

<?php include "./templates/Header.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Homepage</title>
</head>

<h1 class="Center Italic"><?php echo  $STR_Message; ?>  <?php echo $UserName; ?> </h1>
<main>
    <div class="Mid">
        <div class="Center padding boxshadow">
            <h2>
                <a href="./Profile.php" >Profile</a>
            </h2>
            <p> View & Update Your personal information</p>
        </div>

        <div class="Center padding boxshadow" > 
            <h2> 
                <a href="./templates/MarketPlace.php" > MarketPlace </a>
            </h2>
            <p> Checkout Current Listing within your area</p>
        </div>
    </div>
 
    <div class="Mid">
        <div class="Center padding boxshadow"> 
            <h2>
                <a href="./templates/Checkout.php">Basket</a>
            </h2>
            <p> Check your pending purchases and recent orders</p>
        </div>

        <div class="Center padding boxshadow"> 
            <h2>
                <a href="./templates/UpdateCredentials.php" >Settings</a>
            </h1>
            <p> Update/ Change your preferences </p>
        </div>
        </div>
    </div>

</main>


<?php include "./templates/Footer.php"; ?>

</html>