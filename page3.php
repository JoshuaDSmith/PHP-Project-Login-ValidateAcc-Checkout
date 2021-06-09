<?php
session_start();


if(isset($_POST['submit'])) {
    $_SESSION['Home'] = $_POST['Home'];
    $_SESSION['line1'] = $_POST['line1'];
    $_SESSION['City'] = $_POST['line2'];
    $_SESSION['PostCode'] = $_POST['line3'];

    header('Location: SummaryPage.php');
}

?>
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
        .MarginTop {
          margin-top: 5%;
        }
    </style>

</head>
<div class="Center">
    <form method='POST'>
        <h1>Enter User Details</h1>
        <p>Tell Us about yourself</p>
        <div class="Row">
            <h1 class="PaddingTop">House Number:<h2> 
            <input name="Home" placeholder="House Number"/>
        </div>
        <div class="Row">
            <h1 class="PaddingTop">Line of Address:<h2> 
            <input name="line1" placeholder='Line of Address'/>
        </div>
        <div class="Row">
            <h1 class="PaddingTop">City:<h2> 
            <input name="line2" placeholder='City'/>
        </div>
        <div class="Row">
            <h1 class="PaddingTop">Post Code:<h2> 
             <input name="line3" placeholder='PostCode'/>
        </div>

        <input class="RedButton MarginTop" type='submit' name="submit" value="Next" />
    </form>
</div>

    <div>
        <h2>Step 2 of 3</h2>
    </div>