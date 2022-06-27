<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">   
</head>
<body>

<div class='title-header'>
            <div class="container">
                <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Delete Customer Details</h1>
            </div>
        </div>

<div class="container" style="min-height:500px;">      

     
    <div class="con-100">
       
    <?php $cust_result = all_customers(); // call customer records ?>
            
        <form action="<?php echo url_for('customer/delete.php'); ?>" method="POST" class="amend-form-pick" onsubmit="">
            <p class="text-base text-normal text-center text-spacing-tight text-color-black edit-title">Choose Customer</p>
            <select name="cust-pick" id="cust-pick" onsubmit="" onchange="">
                <?php while($row = mysqli_fetch_assoc($cust_result)){
                    echo "<option class='text-sm text-normal text-left text-spacing-tight text-color-black edit-title' value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                }?>
            </select>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
        </form>

    <?php 
        if (isset($_POST['cust-pick'])) {
            $cust_picked = customer_by_name($_POST['cust-pick']);
            $order_selected = order_by_id($cust_picked['email']);
            $orders_amount = 0;
            $delete_warning = "";

            while($cust_orders = mysqli_fetch_assoc($order_selected)){
               $orders_amount = $orders_amount + 1;
            };

            if($orders_amount>0){$delete_warning = "You should not delete this customer!!!";}
    ?>

        <div class="amend-form-outer">
                
            <form action="<?php echo url_for('customer/delete.php'); ?>" method="POST" class="amend-form" onsubmit="">
                <p class="text-xl text-upper text-spacing-tight">There are <?php echo $orders_amount; ?> Orders Against this Customer! <?php echo $delete_warning; ?></p>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Name</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-name" type="text" name="cust-name" value="<?php echo $cust_picked['name']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Email Address</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-email" type="text" name="cust-email" value="<?php echo $cust_picked['email']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Password</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-email" type="text" name="cust-password" value="<?php echo $cust_picked['password']; ?>">
        <div class="col-50-50 border-line">
            <div class='address'>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Delivery Address</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-line1" type="text" name="cust-d-add-line1" value="<?php echo $cust_picked['d_add_line1']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-line2" type="text" name="cust-d-add-line2" value="<?php echo $cust_picked['d_add_line2']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-city" type="text" name="cust-d-add-city" value="<?php echo $cust_picked['d_add_city']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id=cust-d-add-county" type="text" name="cust-d-add-county" value="<?php echo $cust_picked['d_add_county']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-pcode" type="text" name="cust-d-add-pcode" value="<?php echo $cust_picked['d_add_pcode']; ?>">
            </div>
            <div class='address'>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Invoice Address</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-line1" type="text" name="cust-i-add-line1" value="<?php echo $cust_picked['i_add_line1']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-line2" type="text" name="cust-i-add-line2" value="<?php echo $cust_picked['i_add_line2']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-city" type="text" name="cust-i-add-city" value="<?php echo $cust_picked['i_add_city']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id=cust-i-add-county" type="text" name="cust-i-add-county" value="<?php echo $cust_picked['i_add_county']; ?>">
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-pcode" type="text" name="cust-i-add-pcode" value="<?php echo $cust_picked['i_add_pcode']; ?>">
            </div>
        </div>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="DELETE">
                </div>
            </form>
            

        <?php } ?>
        </div>
    </div>
</div>	

   <?php
   // check posted and delete record
    if (isset($_POST["cust-name"])) {

        $name = $_POST['cust-name'];
       delete_customer($name);         
    }
    ?>
 
<script src="<?php echo url_for('style/library.js'); ?>"></script>

<script>


</script>


</body>
</html>

