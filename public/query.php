<?php require_once '../private/initialise.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $descTagIndex ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="icon" href="<?php echo url_for('style/assets/logos/DM_Icon.ico'); ?>" type="image/x-icon">
    <title><?php echo $titleTagIndex; ?></title>
</head>
<body onload="fadeIn();">

<?php include(SHARED_PATH . '/sections/header.php'); ?>
        <h1>SQL PAGES</h1>
    <?php    

    $sql = "SELECT DATE_FORMAT(date, '%d/%m/%y') FROM bloggs";

    mysqli_query($db,$sql);

    ?>
    
    <?php include(SHARED_PATH . '/sections/footer.php'); ?>
    
<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->
<script>
// promo on="block"/off="none"
ID("promo-element").style.display = "none";



</script>

</body>
</html>