<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">       
</head>
<body>

<?php
    $customer = customer_by_id($_SESSION['email']);
    $orders = order_by_id($_SESSION['email']);
?>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Welcome back, <?php echo $customer['name']; ?></h1>
        </div>
    </div>

 
<div class="container" style="min-height : 500px;">   

        <div class="grid grid-2" style="margin: 10px;">
            <div class="bg-grey" style="margin:0 5px 0 auto;">
                <p class='text-base text-normal text-left text-upper text-spacing-tight text-color-main'>Delivery Address : </p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black '><?php echo $customer['d_add_line1']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['d_add_line2']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['d_add_city']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['d_add_county']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['d_add_pcode']; ?></p>
            </div>

            <div class="bg-grey" style="margin:0 auto 0 5px;">
                <p class='text-base text-normal text-left text-upper text-spacing-tight text-color-main'>Invoice Address : </p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['i_add_line1']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['i_add_line2']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['i_add_city']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['i_add_county']; ?></p>
                <p class='text-sm text-normal text-left text-spacing-tight text-color-black'><?php echo $customer['i_add_pcode']; ?></p>
            </div>
        </div>

    <div class='customer-orders-outer'>
      
        <?php while($order = mysqli_fetch_assoc($orders)) {?>
            <div class="col-50-50 ">
                <div>
                    <p class='text-base text-normal text-left text-upper text-spacing-tight text-color-main'>Order Number : <?php echo $order['order_ref']; ?></p>
                    <p class='text-base text-normal text-left text-upper text-spacing-tight text-color-main'>Order Status : <?php echo $order['status']; ?></p><br>
                </div>
            <div>

            <?php $order_line = order_line_by_id($order['order_ref']);
                $order_total = 0;
                while($row = mysqli_fetch_assoc($order_line)) {?>

                    <p class='text-base text-normal text-left text-spacing-tight text-color-black'><?php echo $row['image'] . ", " . $row['type'] . "( x " . $row['quantity'] . ") at £" . $row['price'] . " Total  = £" . ($row['price'] * $row['quantity']) ?></p>
                    <?php $order_total = $order_total + ($row['price'] * $row['quantity']); ?>

                <?php } ?><br>

                    <p class='text-base font-normal text-left text-upper text-spacing-tight text-color-main'>Delivery Charge = £<?php echo $order['delivery_chg']  ?></p>
                    <p class='text-base font-bolder text-left text-upper text-spacing-tight text-color-main'>Grand Total = £<?php echo ($order['delivery_chg'] + $order_total) ?></p>
                </div>
            </div> 
                <?php } ?>
        
        </div>
        <a class="btn text-sm text-normal text-left text-spacing-tight text-color-black edit-title" href="login.php">Log Out</a>
</div>


</body>
</html>

