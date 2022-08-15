<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/footer.css'); ?>">
</head>
<body>

<div class="bottom-margin"></div>

<div class="footer">
    <div class="footer__inner">
        <div class="footer__title">
            <img class="footer__logo" src="<?php echo url_for('style/assets/logos/Dean Middleton Rural Images Photography.png'); ?>"  onload="fadeIn();" alt="">
        </div>

        <div class="col-60-40">

            <div class="col-40-60">
                <div class="col">
                    <p class="text-base text-spacing-tight">Rural Images Photography</p>
                    <p class="text-base text-spacing-tight">17, Summerfields</p>
                    <p class="text-base text-spacing-tight">Sible Hedingham</p>
                    <p class="text-base text-spacing-tight">Essex</p>
                    <p class="text-base text-spacing-tight">CO9 3HS</p>
                    <a href="<?php echo url_for('summary.php');?>">
                        <p class="text-base text-spacing-tight">United Kingdom</p>
                    </a>
                </div>


                <div class="footer__social">

                    <h6 class="text-base text-center text-spacing-tight">Follow me at the following</h6>

                    <div class="footer__social-inner">
                        <a class="social-outer" href="https://www.facebook.com/Rural-Images-Landscape-Photography-104067285733564"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/facebook.png'); ?>" alt=""></a> 
                        <a class="social-outer" href="https://www.instagram.com/ruralimagesphotography"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/instagram.png'); ?>" alt=""></a> 
                        <a class="social-outer" href="#"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/linkedin.png'); ?>" alt=""></a> 
                        <a class="social-outer" href="#"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/pinterest.png'); ?>" alt=""></a> 
                    </div>
                </div>
            </div>
            
                <div class="newslet__col">
                    <p class="newslet__title">NEWSLETTER SIGN UP<p>
                    <!-- <div > -->
                        <form class="newslet__email" action="<?php echo url_for('index.php'); ?>" method="POST">  
                            <input  type='text' id='email' name='email'  placeholder=' YOUR EMAIL ADDRESS'><input id="ok" type="submit" value="OK">
                        </form> 
                    <!-- </div>  -->
                    <p id="mailing-message" class="news-let__marketing-text text-sm text-spacing-tight">*Please submit your email address if you consent to receive marketing emails and you agree to our </p><a class="news-let__privacy-link txt-detail" href='#'>Privacy Policy</a><p class="news-let__marketing-text txt-detail">. You can unsubscribe at any time.</p>
                </div> 
                
                <?php

                if(isset($_POST['email'])){
                 $news_letter_email = add_newsletter_email($_POST['email']);   
                };

                ?>
           



            <!-- <a href="<?php echo url_for('summary.php');?>"></a> -->
                
        </div>
           
            
    </div>
       
            
        <div class="footer__co-details-outer">
            <p class="footer__co-details">&copy; Rural Images by Dean Middleton - Dean Middleton Ltd Registered office, 17 Summerfields, Sible Hedingham, Essex, CO9 3HS.</p>
            <p class="footer__co-details">Registered in England. Company registration number 13588872</p>
        </div>
</div>

<?php
  db_disconnect($db);
//   expireSessionKeys();
?>

</body>
</html>