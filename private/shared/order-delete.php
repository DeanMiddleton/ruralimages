<!DOCTYPE html>
<html lang="en">

<body>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Delete Order Details</h1>
        </div>
    </div>

<div class="container" style="min-height:500px;">     
       
    <?php $orders_result = all_orders(); ?>
            
        <form action="<?php echo url_for('orders/delete.php'); ?>" method="POST" class="amend-form-pick" onsubmit="">
                <p class="text-base text-normal text-center text-spacing-tight text-color-black edit-title">Choose Order</p> 
                <select name="order-pick" id="order-pick" onsubmit="" onchange="">
                    <?php while($row = mysqli_fetch_assoc($orders_result)){
                        echo "<option class='text-sm text-normal text-left text-spacing-tight text-color-black edit-title' value='" . $row["order_ref"] . "' >" . $row["order_ref"] . " - " . $row["email"] .  "</option>";
                    }?>
                </select>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
        </form>

        <?php
        if (isset($_POST['order-pick'])) {
           
            $orders = order_by_ref($_POST['order-pick']);
           
        ?>

            <div class="amend-form-outer">

                <form action="<?php echo url_for('orders/delete.php'); ?>" method="POST" class="amend-form" onsubmit="">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Order Reference</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="order-ref" type="text" name="order-ref" value="<?php echo $orders['order_ref']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Customer Email Address</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="order-email" type="text" name="order-email" value="<?php echo $orders['email']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Order Status</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="order-status" type="text" name="order-status" value="<?php echo $orders['status']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Delivery Charged</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="order-del-chg" type="text" name="order-del-chg" value="<?php echo $orders['delivery_chg']; ?>">


                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="DELETE">
                </div>

                </form> 

        <?php } ?>
   
        </div>

</div>	

    <?php
        if (isset($_POST["order-ref"])) {

            $order_ref = $_POST['order-ref'];
            delete_order_line($order_ref); // delete order lines for order
            delete_order($order_ref); // delete order

        }
    ?>       
        
</body>
</html>