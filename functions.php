<?php


function getNumMatches($word, $array)
{
    $count = 0;
    foreach ($array as $value){
        if ($value == $word){
            $count++;
        }
    }
    return $count;
}

$array = ['apple', 'banana', 'orange', 'apple', 'grapes', 'apple', 'orange', 'apple', 'orange'];
$result = getNumMatches('apple', $array);
// echo "The Number of matches words:  $result <br>";




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

// $priceAfterDiscount = getPriceWithDiscount(1250);
// echo "The Price After Discount: $priceAfterDiscount <br>";


?>