<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">  
</head>
<body>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Add Customer Details</h1>
        </div>
    </div>

<div class="container">      
        <div class="amend-form-outer">       
            <form action="<?php echo url_for('customer/add.php'); ?>" method="POST" class="amend-form" onsubmit="">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Name</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-name" type="text" name="cust-name"  placeholder="*Customer Name" required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Email Address</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-email" type="text" name="cust-email" placeholder="*Customer Email...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Password</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-email" type="text" name="cust-password" placeholder="*Customer Password...." required><br>
            <div class='col-50-50 border-line'>
            <div class='address'>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Delivery Address</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-line1" type="text" name="cust-d-add-line1" placeholder="*Address line 1" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-line2" type="text" name="cust-d-add-line2" placeholder="*Address line 2" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-city" type="text" name="cust-d-add-city" placeholder="*Town / City" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id=cust-d-add-county" type="text" name="cust-d-add-county" placeholder="*County" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-d-add-pcode" type="text" name="cust-d-add-pcode" placeholder="*Postal code" required>
            </div>
            <div class='address'> 
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Invoice Address</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-line1" type="text" name="cust-i-add-line1" placeholder="*Address line 1" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-line2" type="text" name="cust-i-add-line2" placeholder="*Address line 2" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-city" type="text" name="cust-i-add-city" placeholder="*Town / City" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id=cust-i-add-county" type="text" name="cust-i-add-county" placeholder="*County" required>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="cust-i-add-pcode" type="text" name="cust-i-add-pcode" placeholder="*Postal code" required>
            </div>
            </div>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
            </form> 

        </div> 
   
</div>	

    <?php
    if (isset($_POST["cust-name"])) {

        $name = $_POST['cust-name'];
        $email = $_POST['cust-email'];
        $password = $_POST['cust-password'];
        $d_add_line1 = $_POST['cust-d-add-line1'];
        $d_add_line2 = $_POST['cust-d-add-line2'];
        $d_add_city = $_POST['cust-d-add-city'];
        $d_add_county = $_POST['cust-d-add-county'];
        $d_add_pcode = $_POST['cust-d-add-pcode'];
        $i_add_line1 = $_POST['cust-i-add-line1'];
        $i_add_line2 = $_POST['cust-i-add-line2'];
        $i_add_city = $_POST['cust-i-add-city'];
        $i_add_county = $_POST['cust-i-add-county'];
        $i_add_pcode = $_POST['cust-i-add-pcode'];

        add_customer($name, $email, $password, $d_add_line1, $d_add_line2, $d_add_city, $d_add_county, $d_add_pcode, $i_add_line1, $i_add_line2, $i_add_city, $i_add_county, $i_add_pcode ); 
        
    }
    ?>


</body>
</html>

