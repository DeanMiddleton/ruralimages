<?php 
require_once '../private/initialise.php';

$blognumber = $_GET['title'];
$blog_type = blog_by_title($blognumber);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dean Middleton">
    <meta name="keywords" content="">
    <meta name="description" content=">">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/custom.css'); ?>">
    <link rel="icon" href="<?php echo url_for('style/assets/logos/DM_Icon.ico'); ?>" type="image/x-icon">
    <title><?php echo $blog_type['meta_title'] ?></title>
</head>
<body>

<?php include(SHARED_PATH . '/header.php'); ?>

<?php include(SHARED_PATH . '/blog_content.php'); ?> 

<?php include(SHARED_PATH . '/footer.php'); ?>
    
<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->
<script>

</script>

</body>
</html>