<!DOCTYPE html>
<html lang="en">

<body>


<div class="container" style="min-height:500px;">
        
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

            <p class="text-2xl text-center text-upper font-bold text-spacing-tight">Customer Login</p><br>

            <form action="<?php echo url_for('login.php'); ?>" method="POST" class="cust-login">

                <div class="form-input">
                    <p class="text-xl text-left font-normal text-spacing-tight">Email</p>
                    <input class="text-sm text-left font-normal text-spacing-tight" id="custEmail" type="text" name="cust-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" placeholder="*Your email...." required>
                    <p class="text-xl text-left font-normal text-spacing-tight">Password</p>
                    <input class="text-sm text-left font-normal text-spacing-tight" id="cust-password" type="text" name="cust-password" placeholder="*Password...." required>
                </div>

                    <div class="grid grid-cols-2">
                        <input class="btn txt-main txt-left" id="mybtn" type="submit" value="SUBMIT">

                        <a class="txt-detail txt-upper txt-right"  href="<?php echo url_for('admin-dash.php');?>">
                            <img style='width:20px;' src="<?php echo url_for('style/assets/logos/admin.png'); ?>" alt="">
                        </a>
                    </div>
            </form>

        </div>

        <p id="status" class="text-2xl text-center text-upper font-bold text-spacing-tight"><?php echo $login_message; ?></p>
        <?php $_SESSION['pass-code'] = rand(pow(10, 5-1), pow(10, 5)-1);   ?>
        <a class="text-2xl text-center text-upper font-bold text-spacing-tight" style="display:block; color:red; text-decoration: none; margin 0 auto;" href="forgotten.php"><?php echo $forgotten; ?></a>
        
    </div>
</div>

</body>
</html>

