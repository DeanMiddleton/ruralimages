<!DOCTYPE html>
<html lang="en">

<body>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Edit Blog Details</h1>
        </div>
    </div>

<div class="container" style="min-height:500px;">     
   

<?php $blog_result = all_blogs(); ?>
        
        <form action="<?php echo url_for('blogs/edit.php'); ?>" method="POST" class="amend-form-pick" onsubmit="">
        <p class="text-base text-normal text-center text-spacing-tight text-color-black edit-title">Choose Blog</p> 
            <select name="blog-pick" id="blog-pick" onsubmit="" onchange="">
                <?php while($row = mysqli_fetch_assoc($blog_result)){
                    echo "<option class='text-sm text-normal text-left text-spacing-tight text-color-black edit-title' value='" . $row["title"] . "'>" . $row["title"] . "</option>";
                }?>
            </select>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
        </form>

<?php
    if (isset($_POST['blog-pick'])) {

        $blog_picked = blog_by_title($_POST['blog-pick']);

?>

        <div class="amend-form-outer">

            <form action="<?php echo url_for('blogs/edit.php'); ?>" method="POST" class="amend-form" onsubmit="">
                
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Blog Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-title" type="text" name="blog-title" value="<?php echo $blog_picked['title']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Meta Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-meta-title" type="text" name="blog-meta-title" value="<?php echo $blog_picked['meta_title']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Visible to the Public</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-visible" type="number" min=0 max=1 name="blog-visible" value="<?php echo $blog_picked['visible']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Blog Image File Path</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-image" type="text" name="blog-image" value="<?php echo $blog_picked['image']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Blog Content</p>
                <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="blog-content" type="text" name="blog-content"  rows="20"><?php echo $blog_picked['content']; ?></textarea>
                
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
            </form> 

            <?php } ?>
        </div>
 
</div>	

   <?php
    if (isset($_POST["blog-title"])) {

        $title = $_POST['blog-title'];
        $meta_title = $_POST['blog-meta-title'];
        $content = $_POST['blog-content'];
        $visible = $_POST['blog-visible'];
        $image = $_POST['blog-image'];

        amend_blog($title, $meta_title, $content, $visible, $image); // update blog table
        
    }
    ?>
 
</body>
</html>