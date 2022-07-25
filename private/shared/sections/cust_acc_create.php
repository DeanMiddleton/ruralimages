<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">  
</head>
<body>
<?php 
    
    if (!isset($log_message)){$log_message = "";};
?>

<div class="container">
    
<?php
    if ($_POST["status"]=="Log as Guest Account") {
        $form_title = "Guest Account";
    } else {
        $form_title = "Customer Account";
    }



    // CUSTOMER FORM PROCESS
    if (isset($_POST["cust-name"])) {

        $order_ref = "RI" . date("mdyhs");// create order ref
        $_SESSION['order_ref'] = $order_ref;
        $_SESSION['cust-name'] = $_POST["cust-name"];
        // create delivery charge
        $sum_total = 0;
        $counter = 0;
            foreach ($_SESSION['orders'] as $orderline) {
                $sum_total = $sum_total + $orderline['total'];
                $counter++;  
            };
            if($sum_total==1 || $sum_total>100) {$delivery = 0;} else {$delivery = $postPacking;}
     
    
        // If so process data
        // add customer data
        $custName = $_POST["cust-name"];
        $custEmail = $_POST["cust-email"];
        $custPassword = $_POST["cust-password"];

        // check of existing customer
        $emailcheck = customer_by_id($_POST["cust-email"]);
        
        // if yes verify password and allowcate order to customer
        if($emailcheck['email']) {

            if(password_verify($_POST["cust-password"], $emailcheck['password'])) {
                // update order status on db
                $sql = "INSERT INTO `orders` (`order_ref`, `email`, `status`, `delivery_chg` ) VALUES ( '$order_ref', '$custEmail', 'processing', '$delivery');";
                mysqli_query($db, $sql);
                   
                // add order lines to db
                    foreach ($_SESSION['orders'] as $orderline) {
                        $sql = "INSERT INTO `order_lines` (`image`, `order_ref`, `quantity`, `type`, `price` ) VALUES ( '" . $orderline["image"] . "', '$order_ref', '" . $orderline['quantity'] . "', '" . $orderline['size'] . "', '" . $orderline['cost'] . "');";
                        mysqli_query($db, $sql);          
                    }

                

                // set logged in status to in
                $_SESSION['email'] = $custEmail;
                $_SESSION['cust-logged-in'] = 1;
                // redirect back to cart
                header('Location: cart.php'); // Thank you page

            } else {
                // if incorrect password send back to form with message
                $log_message = "Either the email or password is incorrect!";
            }

        } else {
            // new customer ecrypt password and create customer account on db
            $hashed_password = password_hash($custPassword,PASSWORD_BCRYPT);

            $sql = "INSERT INTO `customer` (`name`, `email`, `password`, `d_add_line1`, `d_add_line2`, `d_add_city`, `d_add_county`, `d_add_pcode`, `i_add_line1`, `i_add_line2`, `i_add_city`, `i_add_county`, `i_add_pcode` ) VALUES ( '$custName', '$custEmail', '$hashed_password', '', '', '', '', '', '', '', '', '', '');";
            mysqli_query($db, $sql);

            // create new order
            $sql = "INSERT INTO `orders` (`order_ref`, `email`, `status`, `delivery_chg` ) VALUES ( '$order_ref', '$custEmail', 'processing', '$delivery');";
            mysqli_query($db, $sql);

            // add order lines to db
            foreach ($_SESSION['orders'] as $orderline) {
                $sql = "INSERT INTO `order_lines` (`image`, `order_ref`, `quantity`, `type`, `price` ) VALUES ( '" . $orderline["image"] . "', '$order_ref', '" . $orderline['quantity'] . "', '" . $orderline['size'] . "', '" . $orderline['cost'] . "');";
                mysqli_query($db, $sql);
            }

            

            // set logged in to in
            $_SESSION['email'] = $custEmail;
            $_SESSION['cust-logged-in'] = 1;
            // redirect to cart
            header('Location: cart.php'); // Thank you page
        }

    }?>
        <!-- create or log in form       -->
            <div class="cust-form-outer">
                <p class="text-lg text-center text-spacing-tight font-semibold"><?php echo $form_title; ?></p>

                <form action="<?php echo url_for('create_cust.php'); ?>" method="POST" class="cust-form" onsubmit="">
                    <p class="text-base text-left text-spacing-tight font-normal">Full Name </p><input class="text-sm text-left text-spacing-tight font-normal" id="custName" type="text" name="cust-name" placeholder="*Your name...." required>
                    <p class="text-base text-left text-spacing-tight font-normal">Email </p><input class="text-sm text-left text-spacing-tight font-normal" id="custEmail" type="text" name="cust-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" placeholder="*Your email...." required>
                    <p class="text-base text-left text-spacing-tight font-normal">Password </p><input class="text-sm text-left text-spacing-tight font-normal" id="custPassword" type="text" name="cust-password" placeholder="*Password...." required><br><br>
                    <input class="button" id="mybtn" type="submit" value="SUBMIT"> <p id="status"><?php echo $log_message; ?></p>
                </form>
            </div>
        </div>
            <dir id="formReply"></dir>
    </div>
</div>



</body>
</html>

