<!DOCTYPE html>
<html lang="en">

<body>
        <div class='title-header'>
            <div class="container">
                <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Thank you for your order!</h1>
            </div>
        </div>

<div class="container" style="min-height:500px;">    


    <?php echo "<p class='text-lg font-semibold text-center text-spacing-tight text-color-black edit-title'>Your order reference " . $_SESSION['order_ref'] . " is being processed and is summarised below.</p>"; ?>

        <div class="order-table">
            <p class="text-base text-upper text-center font-bold">Image Title</p><p class="text-base text-upper text-center font-bold">Type</p><p class="text-base text-upper text-center font-bold">Cost</p><p class="text-base text-upper text-center font-bold">(x)</p><p class="text-base text-upper text-center font-bold">Total</p>
            
<?php 
                // order summary
                $counter = 0;
                $sum_total = 0;
                foreach ($_SESSION['orders'] as $orderline) {
                    $sum_total = $sum_total + $orderline['total'];
        
                    if($sum_total==1 || $sum_total>100) {$delivery = 0;} else {$delivery = $postPacking;}
                    $grandTotal = $sum_total + $delivery;

                    echo "<p class='text-sm font-normal text-center text-spacing-tight text-color-black edit-title'>" . $orderline['image'] . "</p><p class='text-sm font-normal text-center text-spacing-tight text-color-black edit-title'>" . $orderline['size'] . "</p><p class='text-sm font-normal text-center text-spacing-tight text-color-black edit-title'>£" . $orderline['cost'] . "</p><p class='text-sm font-normal text-center text-spacing-tight text-color-black edit-title'>" . $orderline['quantity'] . "</p><p class='text-sm font-normal text-center text-spacing-tight text-color-black edit-title'>£" . $orderline['cost'] * $orderline['quantity'] . "</p>";
                    
                    $image["$counter"] = $orderline['image'];
                    $type["$counter"] = $orderline['size'];
                    $price["$counter"] =  $orderline['cost'];
                    $quantity["$counter"] = $orderline['quantity'];
                    
                    $counter++;  
                };
?>
        </div>

        <div class="order-totals">
            <?php echo "<p></p><p></p><p></p><p class='text-sm font-semibold text-center text-spacing-tight text-color-black'>Sub total</p><p class='text-sm font-semibold text-center text-spacing-tight text-color-black'>£" . $sum_total . "</p>"; ?>
            <?php echo "<p></p><p></p><p></p><p class='text-sm font-semibold text-center text-spacing-tight text-color-black'>Delivery</p><p class='text-sm font-semibold text-center text-spacing-tight text-color-black'>£" . $delivery . "</p>"; ?>
            <?php echo "<p></p><p></p><p></p><p class='text-sm font-semibold text-center text-spacing-tight text-color-black'>Grand Total</p><p class='text-sm font-semibold text-center text-spacing-tight text-color-black'>£" . $grandTotal . "</p>"; ?>
        </div>

        <br>
        
</div>
</div>      
        

<?php
        $cust_name = $_SESSION['cust-name'];
        $cust_email = $_SESSION['email'];
        $order_ref = $_SESSION['order_ref'];

        customer_order ($cust_name, $cust_email, $order_ref);
        session_unset();
        
?>
  

</body>
</html>

