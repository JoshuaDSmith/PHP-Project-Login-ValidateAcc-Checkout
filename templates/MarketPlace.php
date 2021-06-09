<?php 
session_start();
include "Header.php";
require("./Basket/items.php");


?>


<?php 

    foreach($Arr_shoppingList as $index => $value)
    {
        $url=$value["Img"];
        $Display .= "
        <tr id='$index' class='Color2'>
                <td>".$index."<td>
                <td><img href='".$url."'><img style='width: 220px;height:220px;'  src='".$url."'/></td>
                <td><p>" . $value["CarMake"]."<p></td>
                <td>" . $value["CarModel"] ."</td>
                <td>" . $value["Owners"] ."</td>
                <td><p>" . $value["Price"] . "</p></td>
                <td><p>". $value["Owners"] . "</p></td>
                <td Purchase Full padding><button id='button' class='button' onclick='functionAlert()'> Add </button></td>
            </tr>
            
            ";
    }

    echo "<table class='Center Spacing Full boxshadow Margin'>
            <tr>
                <th> Article No: </th>
                <th> Car: </th>
                <th> Car Image </th>
                <th> Make </th>
                <th> Make Model </th>
                <th> Prev Owners </th>
                <th> Price</th>
                <th> Prev Owners </th>
            </tr>
        $Display
        </table>"
            
    ?>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <title>Document</title>
    </head>

    <body>
        <div class="boxshadow" id="confirm">
            <p class="Color1 Padding boxshadow" id="ID"></p><br>
            <p id="Brand"></p>
            <p id="Model"></p>
            <div class="RowColumn">
            <p id="Price"></p>
            </div>
            <div class="RowColumn">
                <button class="Half boxshadow" id="yes" onclick="AddBasket();" >Add to Basket?</button>
                <button class="boxshadow" >Cancel</button>
            </div>
        </div>
    </body>

    <script>

    function functionAlert(msg, myYes) {
                var confirmBox = $("#confirm");
                confirmBox.find(".ID").text(msg);
                confirmBox.find(".yes").unbind().click(function() {
                confirmBox.hide();
                });
                confirmBox.find(".yes").click(myYes);
                confirmBox.show();

                myYes = "Hello";
                console.log(myYes)
                let Selector = event.target.parentNode.parentNode.children;

                document.getElementById("ID").innerHTML =Selector[0].outerText 
                document.getElementById("Brand").innerHTML = Selector[3].outerText; 
                document.getElementById("Model").innerHTML = Selector[4].outerText;
                document.getElementById("Price").innerHTML = Selector[6].outerText;

    }
            
    let Count = 0     ;   
    var WebCookies = [];
    function AddBasket() {

        let BasketItems = [ document.getElementById("ID").innerHTML]
        //    Brand: document.getElementById("Brand").innerHTML,
        //    Model: document.getElementById("Model").innerHTML,
        //    Price: document.getElementById("Price").innerHTML
        
        console.log(BasketItems); 
        var closeBox = $("#confirm");
        closeBox.hide();


            
        WebCookies.push(BasketItems);
          
        console.log(WebCookies);
        document.cookie = "myJavascriptVar = " + WebCookies;
        
    
    }


</script>

<?php

$_COOKIE['myJavascriptVar'];


print_r($_COOKIE);

$_SESSION["value"]["Checkout"] = $_COOKIE['myJavascriptVar'];

//print_r($_SESSION["value"]);

?>

<?php include "./Footer.php"; ?>






