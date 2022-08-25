<!DOCTYPE html>
<html lang="en">

<body>



<div class="container">
    
      <div class="newsletter-inner"> 

       
            
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
           


    </div>    
            
                
      
           
            
   
       
       
</div>



</body>
</html>