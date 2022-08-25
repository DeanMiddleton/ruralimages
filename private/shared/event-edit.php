<!DOCTYPE html>
<html lang="en">

<body>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Edit Event Details</h1>
        </div>
    </div>

<div class="container" style="min-height:500px;">     
        
<?php $event_result = all_events(); ?>
            
        <form action="<?php echo url_for('events/edit.php'); ?>" method="POST" class="amend-form-pick" onsubmit="">
        <p class="text-base text-normal text-center text-spacing-tight text-color-black edit-title">Choose Event</p> 
            <select name="event-pick" id="event-pick" onsubmit="" onchange="">
                <?php while($row = mysqli_fetch_assoc($event_result)){
                    echo "<option class='text-sm text-normal text-left text-spacing-tight text-color-black edit-title' value='" . $row["title"] . "'>" . $row["title"] . "</option>";
                }?>
            </select>
                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
  
        </form>

<?php
    if (isset($_POST['event-pick'])) {

        $event_picked = event_by_title($_POST['event-pick']);

?>

        <div class="amend-form-outer">

            <form action="<?php echo url_for('events/edit.php'); ?>" method="POST" class="amend-form" onsubmit="">
                
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-title" type="text" name="event-title" value="<?php echo $event_picked['title']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Location</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-location" type="text" name="event-location" value="<?php echo $event_picked['location']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Date</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-date" type="date" name="event-date" value="<?php echo $event_picked['date']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Visible to The Public</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-visible" type="number" min=0 max=1 name="event-visible" value="<?php echo $event_picked['visible']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Image File Path</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-image" type="text" name="event-image" value="<?php echo $event_picked['image']; ?>">
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Content</p>
                <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-content" name="event-content"  rows="20"><?php echo $event_picked['content']; ?></textarea>

                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>

            </form> 

            <?php } ?>
        </div>
</div>	

   <?php
    if (isset($_POST["event-title"])) {

        $title = $_POST['event-title'];
        $location = $_POST['event-location'];
        $date = $_POST['event-date'];
        $content = $_POST['event-content'];
        $visible = $_POST['event-visible'];
        $image = $_POST['event-image'];

        amend_event($title, $location, $date, $content, $visible, $image); // update event record
        
    }
    ?>
        

</body>
</html>