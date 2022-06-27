<?php

if (isset($_POST["image-name"])) {

    //If so process order data
    
    $imageName = $_POST["image-name"]; // Allocate Image name
    $imageSize = $_POST["image-size"]; // Allocate Image size
    $pagenumber = $_POST["page-number"]; // Allocate Image page number
    //takes image size and extracts price and desc
    $prod_type = explode("|",$imageSize);
    
    $imageCost = $prod_type[1];
    $imageSize = $prod_type[0];

    $imageQuantity = $_POST["image-quantity"]; // Allocates a Image Quantity
    $subTotal = $imageCost * $imageQuantity; // Create a line sub total
    
    
    // Creates an order line number
    if (!isset($_SESSION["linenumber"])) {
        $_SESSION["linenumber"] = 1;
    }else{
        $_SESSION["linenumber"] ++;
    }

    // Adds the order line entry
    $orders = [
        "line" => $_SESSION["linenumber"],
        "image-number" => $pagenumber,
        "image" => $imageName,
        "size" => $imageSize,
        "cost" => $imageCost,
        "quantity" => $imageQuantity,
        "total" => $subTotal
    ];
    
    // Add line entry to order
    if(!isset($_SESSION['orders'])) {
        $_SESSION['orders'][] = $orders;
    } else {
        $line[] = 0;
        foreach($_SESSION['orders'] as $stored_orders){

            $line[] = $stored_orders['line'];
        }
        
        if(!in_array($orders['line'], $line)){
            $_SESSION['orders'][] = $orders;
        }
    }
        
}

// Counts the lines in order to be displayed
if(!isset($_SESSION['orders'])) {
    $countLine = 0;
} else {
    $countLine = count($_SESSION['orders']);
} 


//delete line
if(isset($_GET['line-number'])) {
    
    $deleteLine = $_GET['line-number'];
    unset($_SESSION['orders'][$deleteLine]); 
    
    // re index order
    if(isset($_SESSION['orders'])) {

        $_SESSION['ordersIndexed'] =array_values( $_SESSION['orders']);
        $_SESSION['orders'] = $_SESSION['ordersIndexed'];
    }

    header('location: cart.php');

}







