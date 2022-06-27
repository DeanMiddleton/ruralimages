
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/global.css'); ?>">
</head>
<body>

        <div class='title-header'>
            <div class="container">
                <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white"><?php echo $blog_type['title']; ?></h1>
            </div>
        </div>

<div class="container">     
       
            

            <div class="blog-image-outer">
                <img class="blog-image" src="<?php echo $blog_type['image']; ?>" alt="">
            </div>

            <div class="col-100">
                <p class="text-lg text-spacing-tight"><?php echo $blog_type['content'] ?></p>   
            </div>
        
</div>

    <script src="<?php echo url_for('style/library.js'); ?>"></script>

<script>

</script>
</body>
</html>




