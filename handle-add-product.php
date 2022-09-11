<?php
require "functions.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
   


    // Validation Rules :
    /*
    name → required | string | min:5 | max:255
    description → optional | string 
    price → required | number | min:0  
    */
    // else then print data (name - description if exists - price - price after discount using the function getPriceWithDiscount from question 2)


    $errors = [];
    // Validation Name:
    if (empty($name)){
        $errors[] = 'Name is required';
    }elseif(is_string($name) == false){
        $errors[] = 'Name must be string';
    }elseif(strlen($name) <5){
        $errors[] = 'Name must be > 5 chars';
    }elseif(strlen($name) > 255){
        $errors[] = 'Name must be < 255 chars';
    }

   // Validation Description:
   if(!is_string($description)){
    $errors[] = 'Description must be string';
   }

   // Validation Price:
   if (empty($price)){
        $errors[] = 'Price is required';
    }elseif(!is_numeric($price)){
        $errors[] = 'Name must be number';
    }elseif($price < 0){
        $errors[] = 'Price must be greater than 0';
    }

    if (count($errors) == 0){
        echo "Name of Product : $name <br>";
        if (!empty($description)){
            echo "Description : $description <br>";
        }
        echo "Price of Product : $price <br>";
        $priceAfterDiscount = getPriceWithDiscount($price);
        echo "The Price After Discount: $priceAfterDiscount <br>";
    }else{
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
    }
}



?>