<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/header.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
</head>
<body>

<header class="header fixed">
    
        <div class="head-section">

            <!-- menu icon -->
            <a onclick="menuOpen();" class="hamburger" href="#">     
                <div class="hamburger-top"></div>
                <div class="hamburger-middle"></div>
                <div class="hamburger-bottom"></div>
            </a>

            <!-- logo -->
            <a href="<?php echo url_for('index.php');?>" class="head__logo-outer">
                <img class="head__logo" src="<?php echo url_for('style/assets/logos/Dean Middleton Rural Images Photography.png'); ?>" alt="">
            </a>
        
            <!-- login & basket links -->
            <div class="head__log-in-area-outer">
                <a onclick="logIn();" class="head__log-in-logo-outer" href="<?php echo url_for('portal.php');?>">
                    <img class="head__log-in-logo" src="<?php echo url_for('style/assets/logos/login.png'); ?>" alt="">
                    <span class="head__log-in-text">Sign In</span>
                </a>

                <a onclick="cartOut();" class="head__cart-logo-outer" href="<?php echo url_for('cart.php'); ?>">
                    <img class="head__cart-logo" src="<?php echo url_for('style/assets/logos/shopping-cart-icon.png');?>" alt="">
                    <span class="head__cart-counter"><?php echo $countLine; ?></span>
                </a>
            </div>

        </div>

    <nav class="head__top-menu">
        <?php $links = count($pages);
        for($link=1; $link<$links; $link++) {
            echo "<a class='head__link-btn' id='" . $pages[$link]['link_index'] . "' href='" . url_for($pages[$link]['link']) . "'>" . $pages[$link]['link_title'] . "</a>";
        } ?>
    </nav>

</header> 

<div id="main-menu-outer">
    <div class="main-menu-inner">

        <nav class="main-menu-link-area">
            <?php $links = count($pages);
            for($link=1; $link<$links; $link++) {
                echo "<a class='head__main-link-btn' id='" . $pages[$link]['link_index'] . "' href='" . url_for($pages[$link]['link']) . "'>" . $pages[$link]['link_title'] . "</a>";
            } ?>
        </nav>

        <div class="main-menu-advert-area">
            <?php echo "<a href='". url_for('image.php?id=24') . "' class='main-menu-advert'>"; ?>
                <img style="display: absolute; width:280px;" src="<?php echo url_for('style/assets/thumbnails/seed_pod_sky.jpg'); ?>" alt="">
            </a>
        </div>


    </div>
</div>

<div class="top-margin"></div>

<script src="<?php echo url_for('style/library.js'); ?>"></script>

<!-- scripting -->
<script>

let menuStatus = 0;

// OPEN MENU
function menuOpen() {
    if (menuStatus == 0) {
        menuStatus = 1;
        CLASS("hamburger-middle" , 0).style.opacity = "0.0";
        CLASS("hamburger-top" , 0).style.width = "20px";
        CLASS("hamburger-top" , 0).style.transform = "rotate(-38deg)";
        CLASS("hamburger-top" , 0).style.transformOrigin = "right";
        CLASS("hamburger-bottom" , 0).style.width = "20px";
        CLASS("hamburger-bottom" , 0).style.transform = "rotate(38deg)";
        CLASS("hamburger-bottom" , 0).style.transformOrigin = "right";
        ID("main-menu-outer").style.display = "block";
        setTimeout(fadeIn, 150);

        function fadeIn() {
        ID("main-menu-outer").style.opacity = "1.0";
        ID("main-menu-outer").style.top = "120px";}
    } else {
        menuClose();
    }
}

// CLOSE MENU
function menuClose() {
    menuStatus = 0;
        CLASS("hamburger-middle" , 0).style.opacity = "1.0";
        CLASS("hamburger-top" , 0).style.width = "20px";
        CLASS("hamburger-top" , 0).style.transform = "rotate(0deg)";
        CLASS("hamburger-top" , 0).style.transformOrigin = "right";
        CLASS("hamburger-bottom" , 0).style.width = "20px";
        CLASS("hamburger-bottom" , 0).style.transform = "rotate(0deg)";
        CLASS("hamburger-bottom" , 0).style.transformOrigin = "right";
        ID("main-menu-outer").style.top = "-350px";
        ID("main-menu-outer").style.opacity = "0.0";
        setTimeout(fadeOut, 150);

        function fadeOut() {
            ID("main-menu-outer").style.display = "none";}
}

let cartStatus = 0;

function cartOut() {

    if (cartStatus == 0) {
        cartStatus = 1;
        
        ID("cart").style.display = "block";
        
        function cartfadeIn() {
        ID("cart").style.opacity = "1.0";}

        setTimeout(cartfadeIn, 100);
        
    } else {
        cartStatus = 0;

        ID("cart").style.opacity = "0.0";
        
        function cartfadeOut() {
        ID("cart").style.display = "none";}

        setTimeout(cartfadeOut, 100);
    } 
}


</script>

</body>
</html>