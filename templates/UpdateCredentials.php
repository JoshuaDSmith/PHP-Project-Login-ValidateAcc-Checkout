<?php
include "./Header.php";
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require("./Database.php");

print_r($conn);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// $dbusername = $_POST['newUserName'];
// $dbpassword = $_POST['newPassword'];
// $firstname = $_POST['newName'];
// $surname = $_POST['newSurname'];
// $occupation = $_POST['newOccupation'];
// $email = $_POST['newEmail'];
$UserID = $_SESSION["value"]["id"] ;

if (isset($_POST['newEmail']) || isset($_POST['newPassword']))

{
    $dbusername = $_POST['newUserName'];
    $dbpassword = $_POST['newPassword'];
    $firstname = $_POST['newFirstName'];
    $surname = $_POST['newSurname'];
    $occupation = $_POST['newOccupation'];
    $email = $_POST['newEmail'];


    $sql = "UPDATE userdetails SET username='$dbusername', passwordChr='$dbpassword', lastname='$surname', occupation='$occupation', email='$email' WHERE id='$UserID'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

} else {

}


$_SESSION["value"]["username"] = $dbusername;
$_SESSION["value"]["password"] = $dbpassword;
$_SESSION["value"]["firstname"] = $firstname;
$_SESSION["value"]["surname"] = $surname;
$_SESSION["value"]["occupation"] = $occupation;
$_SESSION["value"]["email"] = $email;




?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Session/styles.css">
    <title>Update User Credentials</title>
</head>
<main>
  <div class="Column Full">
    <div class="Column Margin Center Full Spacing Color4">
      <h1 >Note: You can change your details here </h1> 
      <p> In order to update your preferences no fields can be left blank within the fields</p>
    </div>
    <div class="Column Margin Center Full Spacing Color1">
      <h1>Need Help?  </h1> 
      <p> You can change your password for security reasons or reset it if you forget it. Your Google Account password is used to access many Google products, like Gmail and YouTube.</p>
    </div>
    <div class="Column Margin Center Full Spacing Color3">
      <h1>What happens after you change your password? </h1> 
      <p> If you change or reset your password, you’ll be signed out everywhere except: <br>

    Devices you use to verify that it's you when you sign in.
    Some devices with third-party apps that you've given account access.</p>
    </div>
  </div>
  <form class="Column Full" method="POST">
      <div>
        <h1>Credentials</h1>
      </div>
        UserName: <input class="Margin" placeholder="newUserName" name="newUserName" value="<?php echo $_SESSION["value"]["username"]; ?>"/>
        Password: <input class="Margin" placeholder="newPassword" type="password" name="newPassword" value="<?php echo $_SESSION["value"]["password"]; ?>"/>
        First Name: <input class="Margin" placeholder="newFirstName" name="newFirstName" value="<?php echo $_SESSION["value"]["firstname"]; ?>"/>
        Surname: <input class="Margin" placeholder="newSurname" name="newSurname" value="<?php echo $_SESSION["value"]["surname"]; ?>"/>
        Occupation: <input class="Margin" placeholder="newOccupation" name="newOccupation" value="<?php echo $_SESSION["value"]["occupation"]; ?>" />
        EmailAddress: <input class="Margin" placeholder="newEmail" name="newEmail" value="<?php echo $_SESSION["value"]["email"]; ?>"/>
      <button class="Submit fontWeight textColor1" type="submit"> Change Preferences</button>
  </form>



</main>

<?php include "./Footer.php"; ?>