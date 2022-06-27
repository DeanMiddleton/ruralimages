<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">   
</head>
<body>

<div class="main-con">
    <div class="con-100" style="min-height:500px;">
        
<?php
    $login_message = "";
    $forgotten = "";
    
    if (isset($_POST["cust-email"])) {
        
        $email = $_POST["cust-email"];
        $password = $_POST["cust-password"];

        $row = customer_by_id($email); 
        
        if (isset($row['email'])) {
        
           if ($email === $row['email']){
              
                    if(password_verify($password, $row['password'])) {    
                    
                    $_SESSION['email'] = $email;
                    $_SESSION['cust-logged-in'] = 1;
 
                    header('Location: portal.php');
                    
                } else {

                    $login_message = "Your email or password is incorrect!!";
                    $forgotten = "Forgotten Password?";
                }

            } else {

                $login_message = "No account under that email address!!";

            };       
        }  
    }    

?>
            
        <div class="login-form-outer">

            <p class="txt-sub txt-center txt-upper txt-normal">Customer Login</p><br>

            <form action="<?php echo url_for('login.php'); ?>" method="POST" class="cust-login" onsubmit="">

                <div class="form-input">
                    <p class="txt-detail">Email</p>
                    <input class="txt-detail" id="custEmail" type="text" name="cust-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" placeholder="*Your email...." required>
                    <p class="txt-detail">Password</p>
                    <input class="txt-detail" id="cust-password" type="text" name="cust-password" placeholder="*Password...." required>
                </div>
                    <input class="btn txt-main txt-center" id="mybtn" type="submit" value="SUBMIT">
            </form>

        </div>

        <p id="status" class="txt-main txt-center txt-upper"><?php echo $login_message; ?></p>
        <?php $_SESSION['pass-code'] = rand(pow(10, 5-1), pow(10, 5)-1);   ?>
        <a class="txt-main txt-center txt-upper" style="display:block; color:red; text-decoration: none; margin 0 auto;" href="forgotten.php"><?php echo $forgotten; ?></a>
        
    </div>
</div>
<script src="<?php echo url_for('style/library.js'); ?>"></script>

<script>


</script>
</body>
</html>

