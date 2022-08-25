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
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/custom.css'); ?>">
    <link rel="icon" href="<?php echo url_for('style/assets/logos/DM_Icon.ico'); ?>" type="image/x-icon">
    <title><?php echo $titleTagSummary; ?></title>
</head>
<body>

    <?php include(SHARED_PATH . '/header.php'); ?>
  
    <?php include(SHARED_PATH . '/cust_acc_create.php'); ?>

    <?php include(SHARED_PATH . '/footer.php'); ?>
    
<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->
<script>

</script>

</body>
</html>