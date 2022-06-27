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
                <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Add Blog Details</h1>
            </div>
        </div>

<div class="container">     
    <div class="con-100">
        <div class="amend-form-outer">
            
            <form action="<?php echo url_for('blogs/add.php'); ?>" method="POST" class="amend-form" onsubmit="">
               
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Blog Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-title" type="text" name="blog-title" placeholder="*Blog Title...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Meta Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-meta-title" type="text" name="blog-meta-title" placeholder="*Blog Meta Title...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Visible to the Public</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-visible" type="number" min=0 max=1 name="blog-visible" placeholder="1 for visible 0 for not-visiible" required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Blog Image File Path</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-image" type="text" name="blog-image" placeholder="*Image location .jpg" required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Blog Content</p>
                <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-content" name="blog-content" placeholder="*Write your Blog Content here.." rows="20" required></textarea>

                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
            </form> 
        </div>    
    </div>
</div>	

<?php
    if (isset($_POST["blog-title"])) {

        $title = $_POST['blog-title'];
        $meta_title = $_POST['blog-meta-title'];
        $content = $_POST['blog-content'];
        $visible = $_POST['blog-visible'];
        $image = $_POST['blog-image'];

        add_blog($title, $meta_title, $content, $visible, $image, $file_path ); // add blog         
    }
?>
        
<script src="<?php echo url_for('style/library.js'); ?>"></script>

<script>


</script>


</body>
</html>

