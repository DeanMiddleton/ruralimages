<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/hero.css'); ?>">
</head>
<body>

<!-- hero area -->
<?php $hero_pics = [13,29,35,33,23]; ?>

<div class="hero">

    <div class="hero-outer">

        <?php for($x=0; $x<5; $x++){

            $image = image_by_id($hero_pics[$x]);

            echo "<a id='pic" . $x . "' class='hero-pic-outer' href='". url_for('image.php?id=' . h(u($image['ref']))). "'>";
        
            echo "<img class='hero-pic' src='" . $image["full_size"] . "' alt='" . $image["alt_tag"] . "'>"; ?>
            
            </a>
            
        <?php } ?>

    </div>

    <h1 class="headline text-5xl">Beautifully mood filled images, created by mother nature.</h1>
   
</div>

<!-- INTRO -->
<section>
    <div class="container">
        <div class="text-box">
            <h2 class="text-3xl text-center text-semibold text-spacing-tighter">Rural Images Landscape Photography</h2><br>
            <p class="text-xl text-center text-normal text-spacing-tight">I am a passionate self taught photographer that strives to reproduce the marvel that our green and pleasant land has to offer. I hope you enjoy my images as much as I do and if you see any you like they are available in open and limited edition prints.</p>
        </div>
    </div>
</section>
    
<div class="container">
    <div class="container-3"  style="background-color:white;">

        <div class="link-desc">
            <a class="third-link" href="gallery.php">
                <img src="<?php echo url_for('style/assets/thumbnails/britanna_views.jpg'); ?>" alt="">
                <h3 class="headline text-3xl">My Portfolio Gallery</h3>
            </a>
            <p class="text-xl text-left text-spacing-tight text-normal">I have ever increase portfolio gallery for you peruse through. Some are available for purchase in a Open or Limited Edition Print and should you have any special requirements just let me know...</p>
        </div>
        <div class="link-desc">
            <a class="third-link" href="blog.php">
                <img src="<?php echo url_for('style/assets/backgrounds/blog-pic-thumb.jpg'); ?>" alt="">
                <h3 class="headline text-3xl">My Latest Blogs</h3>
            </a>
            <p class="text-xl text-left text-spacing-tight text-normal">I try to comment on places I visit, images I have taken and sometimes technics I have to produce my work. I would be happy to share them with you...</p>
        </div>
        <div class="link-desc">
            <a class="third-link" href="events.php">
                <img src="<?php echo url_for('style/assets/backgrounds/events-pic-thumb.jpg'); ?>" alt="">
                <h3 class="headline text-3xl">Events and Shows</h3>
            </a>
            <p class="text-xl text-left text-spacing-tight text-normal">When I can I like to exhibite my work at shows and events. There I can discuss my images with like minded collectors and enthusiasts. Some of my work is available for purchase. There are a list of upcoming events...</p>
        </div>

    </div>
</div> 

<div class="container">
    <div class="para-section">
        <img class="fixed-pic" src="<?php echo url_for('style/assets/full-web/holkham_dunes.jpg'); ?>" alt="">
        <h4 class="para-label">If you would like to discuss any of my work or have any requirements please get in touch!</h4>
        <a class="para-btn" href="contact.php">contact me</a>
    </div>
</div>

  
<script src="<?php echo url_for('style/library.js'); ?>"></script>
<!-- scripting -->
<script>


</script>

</body>
</html>