<!DOCTYPE html>
<html lang="en">

<body>
<div class="hero-container" style="background-color: white;">
<!-- hero area -->
<?php $hero_pics = [29,35,33,23]; ?>

    <div class="hero">

        <div class="hero-outer">
            <a class="" href="<?php echo url_for('image.php?title=Sunset+Glow'); ?>">
                <img class="hero-pic" src="style/assets/heros/sunset_glow.jpg" alt="">
            </a>
            <a class="" href="<?php echo url_for('image.php?title=Wave+Break'); ?>">
                <img class="hero-pic" src="style/assets/heros/wave_break.jpg" alt="">
            </a>
            <a class="" href="<?php echo url_for('image.php?title=Walberswick+Beach'); ?>">
                <img class="hero-pic" src="style/assets/heros/walberswick_beach.jpg" alt="">
            </a>
            <a class="" href="<?php echo url_for('image.php?title=Rapeseed+Flower'); ?>">
                <img class="hero-pic" src="style/assets/heros/rapeseed_flower.jpg" alt="">
            </a>
        </div>

        
        <div class="headline-outer">
            <h1 class="headline text-6xl text-spacing-tighter text-upper font-bold text-color-white">Beautiful moody images</h1>
            <h2 class="headline text-4xl text-spacing-tighter font-normal text-italic text-color-white">created by mother nature.</h2><br>
            <!-- <a class="button text-xl text-center font-normal" href="<?php echo url_for('gallery.php'); ?>">gallery ></a> -->
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
    


</body>
</html>