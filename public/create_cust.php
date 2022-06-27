<?php require_once '../private/initialise.php'; ?>


<?php if (!isset($_SESSION["orders"][0])) {header('Location: index.php');} ?>
<?php if (!isset($_SESSION['cust-logged-in'])) {$_SESSION['cust-logged-in'] = 0;} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $descTagSummary ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="icon" href="<?php echo url_for('style/assets/logos/DM_Icon.ico'); ?>" type="image/x-icon">
    <title><?php echo $titleTagSummary; ?></title>
</head>
<body onload="fadeIn();">

<?php include(SHARED_PATH . '/sections/header.php'); ?>
    
<div id="promo-element">
        <?php include(SHARED_PATH . '/sections/promo.php'); ?> <!--welcome section -->    
    </div>


    <div id="loader"> <!--  place content elements in here -->

    <?php include(SHARED_PATH . '/sections/cust_acc_create.php'); ?>

    </div>

    

    <?php include(SHARED_PATH . '/sections/footer.php'); ?>
    
<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->
<script>
// promo on="block"/off="none"
ID("promo-element").style.display = "block";



</script>

</body>
</html>