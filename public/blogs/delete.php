<?php require_once '../../private/initialise.php'; ?>
<?php if($_SESSION['admin-email'] !== 1){header('Location: index.php'); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $descTagPortal ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="icon" href="../../public/assets/logos/DM_Icon.ico" type="image/x-icon">
    <title>Delete blog</title>
</head>
<body onload="fadeIn();">
<!-- Page Details -->

<?php include(SHARED_PATH . '/sections/header.php'); ?>

    <div id="promo-element">
        <?php include(SHARED_PATH . '/sections/promo.php'); ?> <!--welcome section -->    
    </div>

    
<div id="loader">

    <?php include(SHARED_PATH . '/sections/blog-delete.php'); ?>

</div>

<?php include(SHARED_PATH . '/sections/footer.php'); ?>
    
<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->

<script>




</script> 
</body>
</html>