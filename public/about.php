<?php require_once '../private/initialise.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pages[2]['meta_desc'] ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="icon" href="<?php echo url_for('style/assets/logos/DM_Icon.ico'); ?>" type="image/x-icon">
    <title><?php echo $pages[2]['meta_title'] ?></title>
</head>
<body>

<?php include(SHARED_PATH . '/sections/header.php'); ?>

    <div id="promo-element">
        <?php include(SHARED_PATH . '/sections/promo.php'); ?> <!--welcome section -->    
    </div>

    <?php include(SHARED_PATH . '/sections/about-page.php');?>
    
    <?php include(SHARED_PATH . '/sections/footer.php'); ?>

<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->
<script>
// promo on="block"/off="none"
ID("promo-element").style.display = "block";
ID("about").style.color = "var(--colorDecoBrown)";

</script>

</body>
</html>