<?php
if(isset($_POST['admin-log-out'])) {
    $_SESSION['admin-email'] = 0;
    header('Location: admin-login.php');
}
?>
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
                <h1 class='text-4xl font-light text-left text-spacing-tighter text-color-white'>Administration Dashboard</h1>
            </div>
        </div>

<div class="container">

    <div class="con-100" style="min-height:500px;">

        <div class='edit-list-outer'>
            <h3 class="text-xl text-upper text-normal text-center text-spacing-tighter text-color-main" style='color: var(--colorDecoRed);'>Edit Menu</h3>

            <div class='edit-lines'><p class='text-lg text-upper text-normal text-center text-spacing-tighter text-color-main' style='color: var(--colorDecoRed);'>Area</p><p class='txt-detail edit-title'></p><p class='text-lg text-upper text-normal text-center text-spacing-tighter text-color-main' style='color: var(--colorDecoRed);'>Action</p><p class='txt-detail edit-title'></p></div>

            <div class='edit-lines'><p class='text-base text-normal text-center text-spacing-tight text-color-main edit-title'>Customers</p><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('customer/add.php');?>">Add</a><a class='text-base text-normal text-center text-spacing-tight edit-btn' href="<?php echo url_for('customer/edit.php');?>">Edit</a><a class='text-base text-normal text-center text-spacing-tight edit-btn' href="<?php echo url_for('customer/delete.php');?>">Delete</a></div>

            <div class='edit-lines'><p class='text-base text-normal text-center text-spacing-tight text-color-main edit-title'>Orders</p><a class='text-base text-normal text-center text-spacing-tight edit-btn' href="<?php echo url_for('gallery.php'); ?>">F - End</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('orders/edit.php');?>">Edit</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('orders/delete.php');?>">Delete</a></div>

            <div class='edit-lines'><p class='text-base text-normal text-center text-spacing-tight text-color-main edit-title'>Images</p><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('images/add.php');?>">Add</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('images/edit.php');?>">Edit</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('images/delete.php');?>">Delete</a></div>

            <div class='edit-lines'><p class='text-base text-normal text-center text-spacing-tight text-color-main edit-title'>Blogs</p><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('blogs/add.php');?>">Add</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('blogs/edit.php');?>">Edit</a><a class='text-base text-normal text-center text-spacing-tight edit-btn' href="<?php echo url_for('blogs/delete.php');?>">Delete</a></div>

            <div class='edit-lines'><p class='text-base text-normal text-center text-spacing-tight text-color-main edit-title'>Events</p><a class='text-base text-normal text-center text-spacing-tight edit-btn' href="<?php echo url_for('events/add.php');?>">Add</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('events/edit.php');?>">Edit</a><a class='text-base text-normal text-center text-spacing-tight  edit-btn' href="<?php echo url_for('events/delete.php');?>">Delete</a></div>    
        </div>

        <form action="<?php echo url_for('admin-dash.php'); ?>" method="POST"  class="block text-center">
            <input class="btn text-lg text-normal text-spacing-tight text-upper" type="submit" name="admin-log-out" value="Log Out">
        </form>

        <divclass="query">
            <a href="query.php"> 
                <img style='width:70px;' src="<?php echo url_for('style/assets/logos/query.png'); ?>" alt="">
            </a>
        </div>

    </div>
</div>	

  
<script src="<?php echo url_for('style/library.js'); ?>"></script>

<script>


</script>


</body>
</html>

