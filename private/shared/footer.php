<!DOCTYPE html>
<html lang="en">

<body>

<div class="bottom-margin"></div>

<div class="footer">
    

            <!-- <div class="container"> -->

                
                <div class="footer__social">
                <h6 class="text-base text-center text-spacing-tight">Follow me at the following</h6>
                    <div class="footer__social-inner">
                        <a class="social-outer" href="https://www.facebook.com/Rural-Images-Landscape-Photography-104067285733564"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/facebook.png'); ?>" alt=""></a> 
                        <a class="social-outer" href="https://www.instagram.com/ruralimagesphotography"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/instagram.png'); ?>" alt=""></a> 
                        <a class="social-outer" href="#"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/linkedin.png'); ?>" alt=""></a> 
                        <a class="social-outer" href="#"><img class="footer__social-link" src="<?php echo url_for('style/assets/logos/pinterest.png'); ?>" alt=""></a> 
                    </div>
                </div>
            <!-- </div> -->
            
              

     
       
            
        <div class="footer__co-details-outer">
            <p class="footer__co-details">&copy; Rural Images by Dean Middleton - Dean Middleton Ltd Registered office, 17 Summerfields, Sible Hedingham, Essex, CO9 3HS.</p>
            <a href="<?php echo url_for('summary.php');?>" class="footer__co-details">Registered in England. Company registration number 13588872</a>
        </div>
</div>

<?php
  db_disconnect($db);
//   expireSessionKeys();
?>

</body>
</html>