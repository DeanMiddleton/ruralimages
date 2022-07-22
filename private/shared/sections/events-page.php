<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <div class='title-header'>
        <div class="container">
            <h1 class='text-4xl font-light text-left text-spacing-tighter text-color-white'>Upcoming Events</h1>
        </div>
    </div>

<div class="container">
        
<?php 
        $event_result = all_events();
        while($row = mysqli_fetch_assoc($event_result)) {
            if($row['visible'] ==1){ 

            $date = date('d-m-Y', strtotime($row['date'])); //date format
?>
        <div class="container">
            <div class="blog-outer">
                <div class="col-60-40" style="text-decoration: none;">
                    <div class="image-con-SW">
                        <img class="pic" src="<?php echo url_for($row['image'] ); ?>" alt="">
                    </div> 

                    <div class="txt-con">
                        <h1 class="text-2xl font-normal text-left text-spacing-tighter text-color-black"><?php echo $row['title']; ?></h1>
                        <h2 class="text-xl font-normal text-left text-spacing-tighter  text-color-black">Held at <?php echo $row['location']; ?> on <?php echo $date; ?></h2><br>
                        <p class="text-xl font-light text-left text-spacing-tight  text-color-grey"><?php echo $row['content']; ?></p>
                    </div> 

                    <div class="image-con-FW" >
                        <img class="pic" src="<?php echo url_for($row['image'] ); ?>" alt="">
                    </div>   
                </div>
            </div>
        </div><br>
<?php
            }   
        } 
?>   
    </div>


</body>
</html>

