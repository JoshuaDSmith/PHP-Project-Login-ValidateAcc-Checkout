<?php

session_start();

if(isset($_POST['submit'])) {

    $_SESSION['FirstName'] = $_POST['Value1'];
    $_SESSION['LastName'] = $_POST['Value2'];
    $_SESSION['Home'] = $_POST['Value3'];
    $_SESSION['line1'] = $_POST['Value4'];
    $_SESSION['City'] = $_POST['Value5'];
    $_SESSION['PostCode'] = $_POST['Value6'];
    $_SESSION['Gender'] = $_POST['Value7'];
    $_SESSION['Nationality'] = $_POST['Value8'];
    $_SESSION['DateofBirth'] = $_POST['Value9'];
    
    header('Location: Dashboard.php');
}

var_dump($_SESSION);

?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        form {
            display: flex;
            width: 380px;
            flex-direction: column;
        }
        .Row {
            display: flex;
            width: 380px;
            flex-direction: row;
            position: relative;
        }

        .Row input, select {
            position: absolute;
            right: 0
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: orange;
            height: 100%;
        }
        input {
            margin-top: 1%;
            margin-bottom: 1%;
            padding: 2.5%;
            border-radius: 25px;
        }
        .submit {
            background: #00FF00;
            border: 0.5px solid black;
            border-radius: 3%;
        }

        h1 {
            font-style: italic;
            font-size: 18px;
            justify-content: center;
            text-align: center;
        }
        
        h2 {
            font-style: italic;
            font-size: 18px;
            justify-content: center;
            text-align: center;
        }
        .Center {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .RedButton {
            background: red;
            border-style: solid;
            border-width: 1px;
            border-color: white;
            border-radius: 45px;  
            color: white;
        }
        select {
            padding: 2%;
            margin: 1%;
            border-radius: 25px;
        }
        .PaddingTop {
          margin-top: 5%;
          margin-right: 5%;
        }

    </style>

</head>
    <body>
    
        <div class="Center">
             <button class="RedButton" onclick="myFunction()"> Click to Update</button>
        </div>
        
        <div class="Center">
        <form method='POST'>
        <div class="Row">
                <h1 class="PaddingTop">First Name:<h2> 
                <input id = "Value1" name = "Value1" readOnly value="<?php echo $_SESSION['FirstName']; ?>" />
        </div>

        <div class="Row">
            <h1 class="PaddingTop">Last Name:<h2> 
            <input id = "Value2" name = "Value2" readOnly value="<?php echo $_SESSION['LastName']; ?>" />
        </div>

        <div class="Row">
            <h1 class="PaddingTop">Address Line 1:<h2> 
            <input id = "Value3" name = "Value3" readOnly value="<?php echo $_SESSION['Home']; ?>" />
        </div>

        <div class="Row">
            <h1 class="PaddingTop">Address Line 2:<h2> 
            <input id = "Value4" name = "Value4" readOnly value="<?php echo $_SESSION['line1']; ?>"  />
        </div>
        
        <div class="Row">
            <h1 class="PaddingTop">City:<h2> 
            <input id = "Value5" name = "Value5" readOnly value="<?php echo $_SESSION['City']; ?>"  />
        </div>

        <div class="Row">
            <h1 class="PaddingTop">PostCode:<h2> 
            <input id = "Value6" name = "Value6" readOnly value="<?php echo $_SESSION['PostCode']; ?>"  />
        </div>
        
        <div class="Row">
            <h1 class="PaddingTop">Gender:<h2> 
            <input id = "Value7" name = "Value7" readOnly value="<?php echo $_SESSION['Gender']; ?>"  />
        </div>

        <div class="Row">
            <h1 class="PaddingTop">Nationality:<h2> 
            <select name="Value8" id="Value8" >
            <option readOnly value="<?php echo $_SESSION['Nationality'] ?> "> <?php echo $_SESSION['Nationality']?> </option>; 
                    <option value="Europe">Europe</option>
                    <option value="Asia">Asia</option>
                    <option value="UnitedKingdom">United Kingdom</option>
                    <option value="UnitedStates">United States</option>
                </select>
        </div>

        <div class="Row">
            <h1 class="PaddingTop">Date of Birth:<h2> 
            <input id = "Value9" name = "Value9" readOnly value="<?php echo $_SESSION['DateofBirth']; ?>"  />
        </div>
            
                <h1> Are These Details Correct? </h1>
                <input class="RedButton" type='submit' name="submit" value="Confirm Changes" />
        
            </form>
        </div>

        <div>
             <h2>Step 3 of 3</h2>
        </div>

    </body>

<script>

    function myFunction() {
        document.getElementById("Value1").readOnly = false ;
        document.getElementById("Value2").readOnly = false ;
        document.getElementById("Value3").readOnly = false ;
        document.getElementById("Value4").readOnly = false ;
        document.getElementById("Value5").readOnly = false ;
        document.getElementById("Value6").readOnly = false ;
        document.getElementById("Value7").readOnly = false ;
        document.getElementById("Value8").readOnly = false ;
        document.getElementById("Value9").readOnly = false ;
        console.log("click");
    }


</script>
