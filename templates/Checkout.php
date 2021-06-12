<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require("./Basket/items.php");


session_start();

$temp = [$_SESSION['value']['Checkout']];
$myArray = implode(',', $temp);
$newArray = explode(',', $myArray);


if($newArray[0] == null)
{
$CheckoutPrice = "Basket is Empty";
} else {


$TotalPrice = [];
foreach($newArray as $Index=>$value)
{
    //print_r($Arr_shoppingList[$value]);

    $url=$Arr_shoppingList[$value]["Img"];
    $Display .= "
    <span class='Row FullFlex'>
        <span class='Column Color2'>
                <span><img href='" . $url . "'><img style='width: 220px;height:220px;'  src='".$url."'/></span>
        </span>
        <span class='Column'>
            <span><p> Make: " . $Arr_shoppingList[$value]["CarMake"]."<p></td>
            <span> Model: " . $Arr_shoppingList[$value]["CarModel"] ."</span>
            <span><p>Price: £" . $Arr_shoppingList[$value]["Price"] . "</p></span>
            <span>Owners: " . $Arr_shoppingList[$value]["Owners"] ."</span>
            <span class='Full padding'><button id='button' class='button Confirm' onclick='functionAlert()'> Remove </button></span>
        </span>
        
    </span>
    ";
        array_push($TotalPrice, $Arr_shoppingList[$value]["Price"]);
    
}

$CheckoutPrice = array_sum($TotalPrice);
}


?>

<?php include "Header.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <link href="../css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<main class="RowColumn Color5 Spacing">

    <span class='Center Spacing boxshadow MidFlex Margin Color6'>
         <?php echo $Display?>
    </span>

	<div class="QuarterFlex RowColumn Padding">
        <div class="Column boxshadow Color6">
            <h2>Checkout Items:<h2>

            <form class="Column">
                <input class="" placeholder="Enter PromoCode"/>
                <button class="Full"> Apply </button>
            </form>

            <h1>SubTotal: £<?php echo $CheckoutPrice;?></h1>
            <h2>Acceptable Methods:</h2>
            <div class="">
                <span style="font-size: 3em; color: lightblue;">
                    <i class="fab fa-cc-visa"></i>
                </span>
                <span style="font-size: 3em; color: #ff9900;">
                    <i class="fab fa-paypal"></i>
                </span>
                <span style="font-size: 3em; color: purple;">
                    <i class="fab fa-cc-mastercard"></i>
                <span>
                <span style="font-size: 1.0em; color: grey;">
                    <i class="fab fa-cc-amex"></i>
                </span>
                <span style="font-size: 1.0em; color: lightblue;">
                    <i class="fas fa-credit-card"></i>    
                </span>
            </div>

              <div class="Full Column Color1 MarginTop Padding">
                <button class="Full" onclick="AddBasket();"> Use a New Payment Method? </button>
                    <div id="test" style="display:none"> 
                        <form class="Column MarginTop">
                        <input class="Padding" placeholder="Full Name on Card"/>
                        <input class="Padding" type="number" placeholder="16-digit Card Number"/>
                        <input class="Padding" type="number" placeholder="CSV Number"/>
                        
                        <p>Expiry Date:</p>
                        
                        <div class="Row">
                            <input type="number"/>/
                            <input type="number"/>
                        </div>

                        <button class="Full MarginTop boxshadow confirm"> Add Card </button>
                    </div>  
            <div>
        </div>
    </div>
</main>

<script>
//important dont delete: bjec-qatw-zqvx-vdvr-emzy backup code
var stripe = Stripe('pk_test_51I5rGPHXxwk5HDb36lOzdNEEc0ERUYRspaFrSTstd5ube3orNhgObauMTqkFmpUfmoX4ZrQbt7XHdEPp0CTrZh5100fI5dNZ8x');
var elements = stripe.elements();
var cardElement = elements.create('card');
var cardElement = elements.getElement('card');
cardElement.mount('#card-element');

console.log(stripe)
console.log(elements)
console.log(cardElement)




function AddBasket() 
{
var x = document.getElementById("test");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

</script>


<?php include "footer.php"; ?>