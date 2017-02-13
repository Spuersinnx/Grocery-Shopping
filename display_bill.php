<?php
/**
 * Author: Mai Moftah
 * File Name: display_bill.php
 * Assignment: Homework 2
 * Date: 01-30-2017
 */

//POST variables retrieve value from user input in HTML form
$budget = $_POST["budget"];
$apple = $_POST["apple"];
$banana = $_POST["banana"];
$milk = $_POST["milk"];
$cake = $_POST["cake"];
$toast = $_POST["toast"];
$cheese = $_POST["cheese"];
$cookie = $_POST["cookie"];
$water = $_POST["water"];


//set and initialize other global variables
$applePrice = 1;
$bananaPrice = 0.5;
$milkPrice = 2.8;
$cakePrice = 10;
$cookiePrice = 5;
$waterPrice = 1;
$toastPrice = 1.6;
$cheesePrice = 4.5;
$sum = ($apple * $applePrice) + ($banana * $bananaPrice) + ($milk * $milkPrice) + ($cake * $cakePrice) + ($toast * $toastPrice) + ($cheese * $cheesePrice) + ($cookie * $cookiePrice) + ($water * $waterPrice);
$tax = 0;
$total = 0;

//echo table of results
echo '
<table border="1">
    <tr>
       <td>Item</td>
       <td>Quantity</td>
       <td>Price</td>
    </tr>
    <tr>
       <td><img src="apple.png"></td>
       <td>',$apple,'</td>
       <td> $',number_format("$applePrice",2),'</td>
      
    </tr>
    <tr>
       <td><img src="banana.png"></td>
       <td>',$banana,'</td>
       <td> $',number_format("$bananaPrice",2),'</td>
      
    </tr>
    <tr>
       <td><img src="milk.png"></td>
       <td>',$milk,'</td>
       <td> $',number_format("$milkPrice",2),'</td>
     
    </tr>
    <tr>
       <td><img src="cake.png"></td>
       <td>',$cake,'</td>
       <td> $',number_format("$cakePrice",2),'</td>
     
    </tr>
    <tr>
       <td><img src="toast.png"></td>
       <td>',$toast,'</td>
       <td> $',number_format("$toastPrice",2),'</td>
     
    </tr>
    <tr>
       <td><img src="cheese.png"></td>
       <td>',$cheese,'</td>
       <td> $',number_format("$cheesePrice",2),'</td>
       
    </tr>
    <tr>
       <td><img src="cookie.png"></td>
       <td>',$cookie,'</td>
       <td> $',number_format("$cookiePrice",2),'</td>
     
    </tr>
    <tr>
       <td><img src="water.jpg" style="width:128px; height:128px"></td>
       <td>',$water,'</td>
       <td> $',number_format("$waterPrice",2),'</td>
      
    </tr>
    <tr>
       <td>Total</td>
       <td colspan="2">$',number_format("$sum",2),'</td>
    </tr>
</table> ';

//if sum is greater than 10 then apply 1.5% tax, echo tax, and echo total amount after taxes are applied
if ($sum > 10) {

    $tax = 0.015;
    $total = ($sum * 1.0) + ($tax * $sum);
    echo "<br> Tax = $tax";
    echo "<br> Total Amount = $" .number_format("$total",2);

}

//else apply 2% tax, echo tax, and echo total amount after taxes are applied
else{

    $tax = 0.02;
    $total = ($sum * 1.0) + ($tax * $sum);
    echo "<br> Tax = $tax";
    echo "<br> Total Amount = $" .number_format("$total",2);
}

//if total exceeds budget, print warning message in red
if ($total > $budget)
    echo '<p style="color:red;">You have exceeded your budget $',number_format("$budget",2),', review your order! </p>';

//else thank user for shopping in green-colored message
else
    echo '<p style="color:green;">Thank you for shopping at our store! </p>';






?>