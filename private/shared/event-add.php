<!DOCTYPE html>
<html lang="en">

<body>

    <div class='title-header'>
        <div class="container">
            <h1 class="text-4xl font-light text-left text-spacing-tighter text-color-white">Add Event Details</h1>
        </div>
    </div>

<div class="container">     
   
        <div class="amend-form-outer">
        
            <form action="<?php echo url_for('events/add.php'); ?>" method="POST" class="amend-form" onsubmit="">
               
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Title</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-title" type="text" name="event-title" placeholder="*Event Title...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Location</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-location" type="text" name="event-location" placeholder="*Event Location...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Date</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-date" type="date" name="event-date" placeholder="*Event Date...." required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Visible to The Public</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-visible" type="number" min=0 max=1 name="event-visible" placeholder="1 for visible 0 for not-visiible" required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Image File Path</p>
                <input class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-image" type="text" name="event-image" placeholder="*Image location .jpg" required>
                <p class="text-base text-normal text-left text-upper text-spacing-tight text-color-main edit-title">Event Content</p>
                <textarea class="text-sm text-normal text-left text-spacing-tight text-color-black edit-title" id="event-content" name="event-content" placeholder="*Write your Event Content here.." rows="20" required></textarea>

                <div class="grid grid-2">
                    <a class="btn text-sm text-normal text-center text-upper text-spacing-tight text-color-white" href="../admin-dash.php">Admin Dashboard</a>      
                    <input class="btn" id="mybtn" type="submit" value="SUBMIT">
                </div>
            </form> 
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

        add_event($title, $location, $date, $content, $visible, $image ); // add event to table
        
    }
?>
        

</body>
</html>

