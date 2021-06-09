<?php
session_start();

if(isset($_POST['submit'])) {
    $_SESSION['FirstName'] = $_POST['firstname'];
    $_SESSION['LastName'] = $_POST['lastname'];
    $_SESSION['Gender'] = $_POST['Gender'];
    $_SESSION['Nationality'] = $_POST['Nationality'];
    $_SESSION['DateofBirth'] = $_POST['DateofBirth'];

    header('Location: page3.php');
}


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
    </style>

</head>

    <div>
        <div class="Center">
     
            <form method='POST'>
                <h1>Enter User Details</h1>
                <p>Tell Us about yourself</p>
                
                <div class="Row">
                    <h1 class="PaddingTop">House Number:<h2> 
                    <input name="firstname" placeholder="First Name"/>
                </div>

                <div class="Row">
                    <h1 class="PaddingTop">House Number:<h2> 
                    <input name="lastname" placeholder='Surname'/>
                </div>

                <div class="Row">
                    <h1 class="PaddingTop">House Number:<h2> 
                    <select name="Gender" id="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="Row">
                    <h1 class="PaddingTop">House Number:<h2> 
                    <select name="Nationality" id="Nationality">
                        <option value="Europe">Europe</option>
                        <option value="Asia">Asia</option>
                        <option value="UnitedKingdom">United Kingdom</option>
                        <option value="UnitedStates">United States</option>
                    </select>

                <input name="DateofBirth" placeholder='Date of Birth'/>
                <input class="RedButton" name="submit" type='submit' placeholder="submit" value="Next" />
            </form>
        </div>

        <div>
            <h2>Step 1 of 3</h2>
        </div>
    </div>

    <?php
 

    ?>