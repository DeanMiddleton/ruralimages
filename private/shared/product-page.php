<?php $rows = image_by_title($pagenumber); ?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">

    <?php echo"<div class='" . $rows['orientation'] . "-p'>"; ?>
            <div class="image-inner">
                <?php echo "<img class='image' src='" . $rows["full_size"] . "' alt='" . $rows["alt_tag"] . "'  onload='fadeIn();'>" ?>
            </div>
            
        <div class="product__label-outer">
            <div class="product__info-section">
                <?php echo "<h1 class='text-4xl text-normal text-spacing-tighter' style='color:var(--colorDecoRed)'>" . $rows["title"] . "</h1>";?><br>
                <?php echo"<p class='text-lg text-spacing-tight text-color-grey'>" . $rows['meta_desc'] . "</p><br>"; ?> 
                <?php echo"<p class='text-lg text-spacing-tight text-color-grey'>" . $rows['page_desc'] . "</p><br>"; ?> 

                <br>
                <br>
                <a class="button" href="<?php echo url_for('gallery.php'); ?>">back to gallery</a>
            </div>
        </div>
    </div>
    
    </div>

        <div style="height:100px;"></div>

        <div class="container">
            <div class="col-100 bg-white" style="overflow:hidden; min-height:700px;">
                <div class="view-outer">
                    <img class="view-outer__background-wide" src="<?php echo url_for('style/assets/backgrounds/wood-panel.jpg'); ?>" alt="">
                    <div class="view-outer__pic-onwall">
                        <?php echo "<img class='image" . $rows['orientation'] . "' src='" . $rows["thumbnail"] . "' alt='" . $rows["alt_tag"] . "'  onload='fadeIn();'>" ?>
                    </div>
                    <div class="view-outer__blue-chair">
                        <img src="<?php echo url_for('style/assets/backgrounds/sofa-blue.png'); ?>"  onload="fadeIn();" alt="">
                    </div>
                    <p class="mockup-message">*The scales is not accurate size, but just to give you an idea.</p>
                </div> 
            </div>
        </div>
        <br><br>



        <div class="container">

            <br><br>
                <p class="text-base text-spacing-tight color-contrast1">All images are printed to order on high gloss 240gms papers. For larger prints I use an external printer so please allow 10-14 days for delivery. I will look over all images prior to despatch and a signed certificate of authenticity will be included. Should you require any special orders or framing please contact me via the contact me button in the header. Thank you.</p>       
            <br><br>

                <p class="text-base text-spacing-tight">Choose which option you require.</p>
        
                <form action="<?php echo url_for('gallery.php'); ?>" method="POST">     
                    <?php 
                        echo"<input name='image-name' type='hidden' value='" . $rows["title"] . "'>";
                        echo"<input name='page-number' class='txt-detail' type='hidden' value='" . $pagenumber . "'>"; 
                    ?>

                    <select style="width:auto;" name="image-size" id="image-size" onsubmit="" onchange="">

                        <?php echo "<option class='text-sm text-spacing-tight' value='" . $rows['prod1_desc'] . "|" . $rows['prod1_price'] . "'>" . $rows['prod1_desc'] . ", £" . $rows['prod1_price'] . "</option>" ?>
                        <?php echo "<option class='text-sm text-spacing-tight' value='" . $rows['prod2_desc'] . "|" . $rows['prod2_price'] . "'>" . $rows['prod2_desc'] . ", £" . $rows['prod2_price'] . "</option>" ?>
                        <?php echo "<option class='text-sm text-spacing-tight' value='" . $rows['prod3_desc'] . "|" . $rows['prod3_price'] . "'>" . $rows['prod3_desc'] . ", £" . $rows['prod3_price'] . "</option>" ?>
                        <?php echo "<option class='text-sm text-spacing-tight' value='" . $rows['prod4_desc'] . "|" . $rows['prod4_price'] . "'>" . $rows['prod4_desc'] . ", £" . $rows['prod4_price'] . "</option>" ?>
                        
                    </select>

                    <br><br>
                        <p class="text-base text-spacing-tight">How many do you require.</p>
                        <input class="text-sm" type="number" id="image-quantity" name="image-quantity" value="1" min="1" max="10">
                    <br><br>
                        <input id="orderBtn" class="button" type="submit" value="Add to cart">
                </form>
                <br>
                <p class="text-lg text-spacing-tight">Any questions or special requests just contact me.</p><br>
                <a class="button" href="<?php echo url_for('contact.php'); ?>">contact me</a>
        </div>

</body>
</html>




