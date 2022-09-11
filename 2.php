<?php

function getPriceWithDiscount($price){
    if ($price< 1000){
        $precent = 10;
        $discount = ($price/100) * $precent;
        $new_price = $price - $discount; 
    }elseif($price>=1000){
        $precent = 5;
        $discount = ($price/100) * $precent;
        $new_price = $price - $discount; 
    }
    return $new_price;
}

$priceAfterDiscount = getPriceWithDiscount(1250);
echo "The Price After Discount: $priceAfterDiscount";


?>