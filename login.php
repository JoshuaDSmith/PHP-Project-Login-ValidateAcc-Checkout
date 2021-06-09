<?php
ob_start();
//error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>


<?php


$_SESSION['value'] = null;
$username = $name = $password = $surname = $occupation = $email = "";

$usernameErr = $nameErr = $passwordErr = $surnameErr = $occupationErr = $emailErr = "";

if (empty($_POST["username"])) {
    $usernameErr = "Empty Username";
  } else {
    $username = $_POST["username"];
    $_SESSION['value']['username'] = $username;
}

if (empty($_POST["password"])) {
    $passwordErr = "Empty Password";
  } else {
    $password = $_POST["password"];
    $_SESSION['value']['password'] = $password;
}

if (empty($_POST["name"])) {
    $nameErr = "Enter a name value";
  } else {
    $name = $_POST["name"];
    $_SESSION['value']['name'] = $name;
}

if (empty($_POST["surname"])) {
    $surnameErr = "Empty Surname";
  } else {
    $surname = $_POST["surname"];
    $_SESSION['value']['surname'] = $surname;

}


if (empty($_POST["occupation"])) {
    $occupationErr = "Empty Job Field";
  } else {
    $occupation = $_POST["occupation"];
    $_SESSION['value']['occupation'] = $occupation;
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format Be careful of Symbols: %@#~";
    }  else {
        $_SESSION['value']['Email'] = $email;
  }
}

if(isset($_SESSION['value']['username'], $_SESSION['value']['password'], $_SESSION['value']['name'], $_SESSION['value']['surname'], $_SESSION['value']['occupation'], $_SESSION['value']['Email']))
{
  header('Location: templates/insertTable.php');
  exit;
} else if(isset($_SESSION['value']['Email'], $_SESSION['value']['password']))
{
  header('Location: templates/Validation.php');
  exit;
}






print_r($_SESSION['value']);





?>
<div class="RowColumn Color1">
<?php include "./templates/WebisteLogo.php"; ?>
</div>
<main class="Login RowColumn BackgroundImage">
    <div class="Padding">
        <form class="Center Padding Column BoxStyling" method="POST">
        <h1> New User? Register Now</h1>
        
            Username:       <input type="text" name="username" value="<?php echo $username;?>">
                            <p class="error">* <?php echo $usernameErr;?></p>
                            <br><br>

            Password:        <input type="password" name="password" value="<?php echo $password;?>">
                            <p class="error">* <?php echo $passwordErr;?></p>
                            <br><br>

            Enter Name:     <input type="text" name="name" value="<?php echo $name;?>">
                            <span class="error">* <?php echo $nameErr;?></span>
                            <br><br>
            
            Enter Surname:  <input type="text" name="surname" value="<?php echo $surname;?>">
                            <p class="error">* <?php echo $surnameErr;?></p>
                            <br><br>
            
            Occupation:     <input type="text" name="occupation" value="<?php echo $occupation;?>">
                            <span class="error">* <?php echo $occupationErr;?></span>
                            <br><br>


            E-mail:         <input type="text" name="email" value="<?php echo $email;?>">
                            <span class="error">* <?php echo $emailErr;?></span>
                            <br><br>
           
           
            <button type="submit"> Click Here To Register</button>
        </form>
    </div>
    <div class="BoxStyling Padding">
        <form class="Column" method="POST">
        <h1> Already a user? Sign into the Portal</h1>
            <input placeholder="Email Address" name="email"/>
            <input placeholder="Password" type="password" name="password"/>
            <button type="submit"> Click Here To Sign In</button>
        </form>
    </div>
</main>

<?php include "./templates/Footer.php"; ?>


