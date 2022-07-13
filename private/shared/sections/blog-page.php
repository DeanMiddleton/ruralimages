<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

    <div class='title-header'>
        <div class="container">
            <h1 class='text-4xl font-light text-left text-spacing-tighter text-color-white'>Welcome to my Blogs</h1>
        </div>
    </div>

<div class="container">

    <?php $blog_result = all_blogs();
        while($row = mysqli_fetch_assoc($blog_result)) {
            if($row['visible'] == 1) {?>

        <div class="container">
            <div class="blog-outer">
                <a href="<?php echo url_for('blog.php?id=' . h(u($row["ref"]))); ?>" class="col-60-40">
                    <div class="image-con-SW">
                        <img class="pic" src="<?php echo url_for($row['image'] ); ?>" alt="">
                    </div> 

                    <div class="container">
                        <h1 class="text-2xl font-normal text-left text-spacing-tighter text-color-black"><?php echo $row['title']; ?></h1>
                        <br>
                        <p class="text-xl font-light text-left text-spacing-tight  text-color-grey"><?php echo substr( $row['content'],0,300) . ".... more"; ?></p>
                    </div> 

                    <div class="image-con-FW">
                        <img class="pic" src="<?php echo url_for($row['image'] ); ?>" alt="">
                    </div>   
                </a>
            </div>
        </div><br>

<?php
            }  
        }
?>

</div>

    
</body>
</html>

