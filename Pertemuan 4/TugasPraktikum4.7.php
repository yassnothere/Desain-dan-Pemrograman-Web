<?php
$price = 120000;
echo "price : $price <br>";

if($price > 100000){
  $price *= 0.8;
  echo "Diskon : 20% <br>";
}

echo "Total price : $price";
?>