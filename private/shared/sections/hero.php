<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/hero.css'); ?>">
</head>
<body>
<div class="container" style="background-color: white;">
<!-- hero area -->
<?php $hero_pics = [13,29,35,33,23]; ?>

    <div class="hero">

        <div class="hero-outer">

            <?php for($x=0; $x<5; $x++){

                $image = image_by_id($hero_pics[$x]);

                echo "<a id='pic" . $x . "' class='hero-pic-outer' href='". url_for('image.php?title=' . h(u($image['title']))). "'>";?>
            
                <img class='hero-pic' src='<?php echo url_for($image["full_size"]);?>' alt='<?php echo url_for($image["alt_tag"]); ?>'>
                
                </a>
                
            <?php } ?>

        </div>
        
        <div class="headline-outer">
            <h1 class="headline text-6xl text-spacing-tighter text-upper font-bold">Beautiful moody images</h1>
            <h2 class="headline text-4xl text-spacing-tighter font-normal text-italic color-grey">created by mother nature.</h2><br>
            <a class="button text-xl text-center font-normal" href="<?php echo url_for('gallery.php'); ?>">gallery ></a>
        </div>


    </div>
</div>
<!-- INTRO -->
<section>
    <div class="container" style="background-color: white;">
        <div class="text-box">
            <h2 class="text-4xl text-center text-upper font-semibold text-spacing-tighter">Rural Images Landscape Photography</h2><br>
            <p class="text-lg text-center text-spacing-tight font-normal color-grey">I am a passionate self taught photographer that strives to reproduce the marvel that our green and pleasant land has to offer. I hope you enjoy my images as much as I do and if you see any you like they are available in open and limited edition prints.</p>
        </div>
    </div>
</section>
    
<div class="container" style="background-color:white;">
    <div class="container-3">

        <div class="link-desc">
            <a class="third-link" href="<?php echo url_for('gallery.php'); ?>">
                <img src="<?php echo url_for('style/assets/thumbnails/britannia_views.jpg'); ?>"  onload="fadeIn();" alt="">
                <div class="headline-outer">
                    <h3 class="headline text-spacing-tight font-semibold text-upper text-3xl">Portfolio Gallery</h3>
                </div>
            </a><br>
            <p class="text-lg text-justify text-spacing-tight font-normal color-grey">I have ever increase portfolio gallery for you peruse through. Some are available for purchase in a Open or Limited Edition Print and should you have any special requirements just let me know...</p>
        </div>
        <div class="link-desc">
            <a class="third-link" href="<?php echo url_for('blogs.php'); ?>">
                <img src="<?php echo url_for('style/assets/backgrounds/blog-pic-thumb.jpg'); ?>" onload="fadeIn();"alt="">
                <div class="headline-outer">
                    <h3 class="headline text-spacing-tight font-semibold text-upper text-3xl">My Latest Blogs</h3>
                </div>
            </a><br>
            <p class="text-lg text-justify text-spacing-tight font-normal color-grey">I try to comment on places I visit, images I have taken and sometimes technics I have to produce my work. I would be happy to share them with you...</p>
        </div>
        <div class="link-desc">
            <a class="third-link" href="<?php echo url_for('blog.php'); ?>">
                <img src="<?php echo url_for('style/assets/backgrounds/events-pic-thumb.jpg'); ?>" onload="fadeIn();" alt="">
                <div class="headline-outer">
                    <h3 class="headline text-spacing-tight font-semibold text-upper text-3xl">Events and Shows</h3>
                </div>
            </a><br>
            <p class="text-lg text-justify text-spacing-tight font-normal color-grey">When I can I like to exhibite my work at shows and events. There I can discuss my images with like minded collectors and enthusiasts. Some of my work is available for purchase. There are a list of upcoming events...</p>
        </div>

    </div>
</div> 

<div class="container">
    <div class="para-section">
        <img class="fixed-pic" src="<?php echo url_for('style/assets/full-web/holkham_dunes.jpg'); ?>"  onload="fadeIn();" alt="">
        <h4 class="para-label">If you would like to discuss any of my work or have any requirements please get in touch!</h4>
        <a class="para-btn text-xl text-center font-normal" href="contact.php">contact me</a>
    </div>
</div>

</body>
</html>