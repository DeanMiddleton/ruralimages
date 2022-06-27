<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/amend.css'); ?>">  
</head>
<body>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Edit Image Details</h1>
        </div>
    </div>

<div class="container" style="min-height:500px;">     

<?php $image_result = all_images(); ?>
            
        <form action="<?php echo url_for('images/edit.php'); ?>" method="POST" class="amend-form-pick" onsubmit="">
        <p class="text-base text-normal text-center text-spacing-tight text-color-black edit-title">Choose Image</p> 
                <select name="image-pick" id="image-pick" onsubmit="" onchange="">
                    <?php while($row = mysqli_fetch_assoc($image_result)){
                        echo "<option class='text-sm text-normal text-left text-spacing-tight text-color-black edit-title' value='" . $row["title"] . "'>" . $row["title"] . "</option>";
                    }?>
                </select>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>

        </form>

        <?php
        if (isset($_POST['image-pick'])) {

            $image_picked = image_by_title($_POST['image-pick']);

        ?>

        <div class="amend-form-outer">

            <form action="<?php echo url_for('images/edit.php'); ?>" method="POST" class="amend-form" onsubmit="">
                
            <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Image Title</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-title" type="text" name="image-title" value="<?php echo $image_picked['title']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Meta Title for SEO</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-meta-title" type="text" name="image-meta-title" value="<?php echo $image_picked['meta_title']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Meta Description of SEO</p>
                    <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-meta-desc" name="image-meta-desc" rows="3"><?php echo $image_picked['meta_desc']; ?></textarea>
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Alt Tag for SEO</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-alt-tag" type="text" name="image-alt-tag" value="<?php echo $image_picked['alt_tag']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Page Description</p>
                    <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-page-desc" name="image-page-desc" rows="20"><?php echo $image_picked['page_desc']; ?></textarea>

            <div class="grid grid-2">
                <div class="amend-form">

                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Thumbnail File Path</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-thumbnail" type="text" name="image-thumbnail" value="<?php echo $image_picked['thumbnail']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Half Size File Path</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-half-size" type="text" name="image-half-size" value="<?php echo $image_picked['half_size']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Full Full Size File Path</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-full-size" type="text" name="image-full-size" value="<?php echo $image_picked['full_size']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Thumbnail Portrait or Landscape</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-orientation" type="text" name="image-orientation" value="<?php echo $image_picked['orientation']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Theme</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="image-theme" type="text" name="image-theme" value="<?php echo $image_picked['theme']; ?>">

                </div>
                <div class="amend-form">
    
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 1 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod1-desc" type="text" name="prod1-desc" value="<?php echo $image_picked['prod1_desc']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 1 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod1-price" type="number" name="prod1-price"  value="<?php echo $image_picked['prod1_price']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 2 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod2-desc" type="text" name="prod2-desc"  value="<?php echo $image_picked['prod2_desc']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 2 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod2-price" type="number" name="prod2-price"  value="<?php echo $image_picked['prod2_price']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 3 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod3-desc" type="text" name="prod3-desc"  value="<?php echo $image_picked['prod3_desc']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 3 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod3-price" type="number" name="prod3-price"  value="<?php echo $image_picked['prod3_price']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 4 Description</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod4-desc" type="text" name="prod4-desc"  value="<?php echo $image_picked['prod4_desc']; ?>">
                    <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Product 4 Price</p>
                    <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="prod4-price" type="number" name="prod4-price"  value="<?php echo $image_picked['prod4_price']; ?>">
                </div>
            </div>


                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>

            </form> 

            <?php } ?>
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

        amend_image($title, $meta_title, $meta_desc, $alt_tag, $page_desc, $thumbnail, $half_size, $full_size, $orientation, $theme, $prod1_desc, $prod1_price, $prod2_desc, $prod2_price, $prod3_desc, $prod3_price, $prod4_desc, $prod4_price); 
        
    }
    ?>

</body>
</html>