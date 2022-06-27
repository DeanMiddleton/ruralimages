<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">
    
</head>
<body>

<div class='title-header'>
            <div class="container">
                <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Add Image Details</h1>
            </div>
        </div>

<div class="container">     
    <div class="con-100">
       
        <div class="amend-form-outer">
            
            <form action="<?php echo url_for('images/add.php'); ?>" method="POST" class="amend-form" onsubmit="">

                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Image Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-title" type="text" name="image-title" placeholder="*Image Title...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Meta Title for SEO</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-meta-title" type="text" name="image-meta-title" placeholder="*Image Meta Title...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Alt Tag for SEO</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-alt-tag" type="text" name="image-alt-tag" placeholder="*Image Alt Tag...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Meta Description of SEO</p>
                <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-meta-desc" name="image-meta-desc" placeholder="*Write your Image Meta Description here.." rows="3" required></textarea>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Page Description</p>
                <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-page-desc" name="image-page-desc" placeholder="*Write your Image Page Description here.." rows="20" required></textarea>
            
            <div class="grid grid-2">
                <div class="amend-form">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Thumbnail File Path</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black " style="width:320px;" id="image-thumbnail" type="text" name="image-thumbnail" placeholder="*Image thumbnail location..." required>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Half Size File Path</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-half-size" type="text" name="image-half-size" placeholder="*Image half-size location..." required>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Size File Path</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-full-size" type="text" name="image-full-size" placeholder="*Image Full-size location..." required>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Thumbnail Portrait or Landscape</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-orientation" type="text" name="image-orientation" placeholder="thumb-port / thumb-land" required>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Theme</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-theme" type="text" name="image-theme" placeholder="*Image theme..." required>
                </div>
                <div class="amend-form">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 1 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod1-desc" type="text" name="prod1-desc" placeholder="*Product 1 Description..." required>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 1 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod1-price" type="number" name="prod1-price" placeholder="*Product 1 Price (eg 12.23) ..." required>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 2 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod2-desc" type="text" name="prod2-desc" placeholder="*Product 2 Description...">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 2 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod2-price" type="number" name="prod2-price" placeholder="*Product 2 Price (eg 12.23) ...">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 3 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod3-desc" type="text" name="prod3-desc" placeholder="*Product 3 Description...">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 3 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod3-price" type="number" name="prod1-price" placeholder="*Product 3 Price (eg 12.23) ...">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 4 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod4-desc" type="text" name="prod4-desc" placeholder="*Product 4 Description...">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 4 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod4-price" type="number" name="prod4-price" placeholder="*Product 4 Price (eg 12.23) ...">
                </div>
            </div>
            
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
            </form> 
        </div>
        
    </div>
</div>	

<?php
    if (isset($_POST["image-title"])) {

        $title = $_POST['image-title'];
        $meta_title = $_POST['image-meta-title'];
        $meta_desc = $_POST['image-meta-desc'];
        $alt_tag = $_POST['image-alt-tag'];
        $page_desc = $_POST['image-page-desc'];
        $thumbnail = $_POST['image-thumbnail'];
        $half_size = $_POST['image-half-size'];
        $full_size = $_POST['image-full-size'];
        $orientation = $_POST['image-orientation'];
        $theme = $_POST['image-theme'];
        $prod1_desc = $_POST['prod1-desc'];
        $prod1_price = $_POST['prod1-price'];
        $prod2_desc = $_POST['prod2-desc'];
        $prod2_price = $_POST['prod2-price'];
        $prod3_desc = $_POST['prod3-desc'];
        $prod3_price = $_POST['prod3-price'];
        $prod4_desc = $_POST['prod4-desc'];
        $prod4_price = $_POST['prod4-price'];
       
        add_image($title, $meta_title, $meta_desc, $alt_tag, $page_desc, $thumbnail, $half_size, $full_size, $orientation, $theme, $prod1_desc, $prod1_price, $prod2_desc, $prod2_price, $prod3_desc, $prod3_price, $prod4_desc, $prod4_price ); // add new image to table
        
    }
?>
        
    
<script src="<?php echo url_for('style/library.js'); ?>"></script>

</body>
</html>

