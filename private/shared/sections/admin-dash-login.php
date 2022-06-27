<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/customer_login.css'); ?>">   
</head>
<body>

<div class="main-con">
    <div class="con-100" style="min-height:500px;">        
<?php
    $login_message = "";

    // Check email was entered if so set varables
    if (isset($_POST["admin-email"])) {
        $login_message = "";
        $email = $_POST["admin-email"];
        $password = $_POST["admin-password"];
        $row = admin_by_id($email); 
        
        // if email exists match with enter email
        if (isset($row['email'])) {
           if ($email === $row['email']){
                // check if password matches
                if ($password === $row['password']){
                    // set sessions and redirect to dashboard
                    $_SESSION['email'] = $email;
                    $_SESSION['admin-email'] = 1;
                    header('Location: admin-dash.php');

                } else {
                    // if password does match tell user and try again
                    $login_message = "Your email or password is incorrect!!";
                    // reset link
                    // send code via registered email and redirect to new password creation page";
                }
            } else {
                // if no email on system tell user
                $login_message = "No account under that email address!!";
            };       
        }   
    }    
?>
        <!-- log in form -->
        <div class="login-form-outer">
            <p class="txt-sub txt-center txt-upper txt-normal">Admin Login</p><br>
    
            <form action="<?php echo url_for('admin-login.php'); ?>" method="POST"  class="admin-login" onsubmit="">
                <div class="form-input">
                    <p class="txt-detail">Email </p>
                    <input class="txt-detail" id="adminEmail" type="text" name="admin-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" placeholder="*Your email...." required>
                    <p class="txt-detail">Password </p>
                    <input class="txt-detail" id="adminPassword" type="text" name="admin-password" placeholder="*Password...." required>
                </div>
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT"> 
            </form>
        </div>  
            <p id="status" class="txt-main txt-center txt-upper"><?php echo $login_message; ?></p>
    </div>
</div>

<script src="<?php echo url_for('style/library.js'); ?>"></script>
<script>


</script>
</body>
</html>

