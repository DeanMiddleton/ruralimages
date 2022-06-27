<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>"> 
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">     
</head>
<body>

<div class="main-con">

        <div class='title-header'>
            <div class="container">
                <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Reset Password</h1>
            </div>
        </div>

<div class="container">      
    <div class="con-100" style="min-height:500px;">
        
    <?php
        $reset_message = "";
        $reset_intruct = "Please enter your email into the box above and a 5 digit passcode will be sent to you.";
        $cust_email = "";
        $appear1 = "display: block;";
        $appear2 = "display: none;";
        if(isset($_POST['cust-email'])){
            
            $appear1 = "display: none;";
            $appear2 = "display: block;";
            $cust_email = $_POST['cust-email'];
            $_SESSION['code'] = $_SESSION['pass-code'];
            $_SESSION['expiries']["code"] = time() + 15*60; // 15 mins
            $reset_intruct = "A 5 number passcode has been sent to your email address.<br>IF YOU HAVE A GMAIL ACCOUNT PLEASE CHECK YOU SPAM FOLDER!!<br>This will expire in 15 minutes!";

            if (!isset($_SESSION['email_sent'])) {
                $_SESSION['email_sent'];
                send_code($cust_email,$_SESSION['code']);
            }
   
        }
        
            if(isset($_POST['passcode'])){
                if($_POST['passcode'] == $_SESSION['pass-code']){
                    if($_POST['new-password'] === $_POST['new-password-r'] ) {
                        update_customer_password ($_POST['cust-email'], $_POST['new-password']);
                        header('Location: login.php');
                    } else {
                        $reset_message = "Your passwords do not match!!";
                    }
                } else {
                    $reset_message = "passcode incorrect!";
                }
            }
            ?>


            <div class="amend-form-outer" style="max-width:320px; <?php echo $appear1; ?>">          
                <form action="<?php echo url_for('forgotten.php'); ?>" method="POST" class="amend-form" onsubmit="">

                    <p class="txt-detail txt-upper">PLEASE ENTER YOUR EMAIL ADDRESS</p>
                    <input class="txt-detail" id="image-title" type="text" name="cust-email" placeholder="*Email...." required>
                
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">

                </form> 
            </div>
                <p class="txt-detail txt-center"><?php echo $reset_intruct; ?></p>
    
            <div class="amend-form-outer" style="max-width:320px; <?php echo $appear2; ?>">          
                <form action="<?php echo url_for('forgotten.php'); ?>" method="POST" class="amend-form" onsubmit="">

                    <p class="txt-detail txt-upper">Enter your 5 number code here</p>
                    <input class="txt-detail" id="image-title" type="text" name="passcode" placeholder="*Passcode Eg.12345" required>
                    <p class="txt-detail txt-upper">Email</p>
                    <input class="txt-detail" id="image-title" type="text" name="cust-email" value="<?php echo $_POST['cust-email']; ?>">
                    <p class="txt-detail txt-upper">New Password</p>
                    <input class="txt-detail" id="image-title" type="text" name="new-password" placeholder="*Password" required>
                    <p class="txt-detail txt-upper">New Password Repeat</p>
                    <input class="txt-detail" id="image-title" type="text" name="new-password-r" placeholder="*Password" required>
                
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">

                </form> 
            </div>
                <p class="txt-detail txt-center"><?php echo $reset_message; ?></p>
    </div>
</div>
<script src="<?php echo url_for('style/library.js'); ?>"></script>


</body>
</html>

