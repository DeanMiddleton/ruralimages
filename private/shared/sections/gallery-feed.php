<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/gallery-feed.css'); ?>">
</head>
<body>
    
    <div class="gallery-cat-outer">
        <form class="gallery-cat-btns" action="<?php echo url_for('gallery.php'); ?>" method="post">
            <button class="cat-btn" name="category" value="all">all</button>
            <button class="cat-btn" name="category" value="seascape">sea</button>
            <button class="cat-btn" name="category" value="abstract">abstract</button>
            <button class="cat-btn" name="category" value="rural">rural</button>
            <button class="cat-btn" name="category" value="moody">moody</button>
            <button class="cat-btn" name="category" value="bw">B / W</button>
        </form>
    </div>

    <div class="container">

    <div class="gallery-outer">
        <?php
        
        if (isset($_POST["category"])) {
            if ($_POST["category"] === "all") {

                $thumbnail_result = all_thumbnails();

            } else {
                
                $thumbnail_result = images_by_cat($_POST["category"]);}

        } else {    

            $thumbnail_result = all_thumbnails();

        }

        while($row = mysqli_fetch_assoc($thumbnail_result)) {?>

            <div class="thumb-container bg-white shadow-light">

            <a class='thumb-outer' href="<?php echo url_for('image.php?id=' . h(u($row["ref"]))); ?>">
                <?php echo"<img class='thumb " .$row['orientation'] . "' src='" . $row["thumbnail"] . "' alt='" . $row["alt_tag"] . "'  onload='fadeIn();''>"; ?>
            </a>

            <a class="thumb-title-surround" href="<?php echo url_for('image.php?id=' . h(u($row["ref"]))); ?>">
                <?php echo"<div class='thumb-title text-base text-upper text-center text-spacing-tight'>" . $row['title'] . "</div>"; ?>
            </a>
        </div>

        <?php }
        ?>
        
    </div>
</div>


</body>
</html>