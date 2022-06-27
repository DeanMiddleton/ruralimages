<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/contact-form.css'); ?>">
</head>
<body>

    <div class='title-header'>
        <div class="container">
            <h1 class='text-4xl font-light text-left text-spacing-tighter text-color-white'>Contact Me</h1>
        </div>
    </div>


<div class="container">

    <p class="text-2xl font-normal text-center text-spacing-tighter text-color-black" style="padding: 10px 20px;">If you would like to discuss any of my images, products or a special request. You can contact me on a number of ways.</p><br>

    <div class="container">
        <div class="col-40-60">
           <div class="container">    
                <p class="text-2xl font-normal text-left text-spacing-tighter text-color-black">Call me</p>

                <p class="text-lg font-normal text-left text-spacing-tight text-color-grey"> Between 9am to 6pm (Monday to Friday) and 10pm to 3pm (Saturday) on 07826 390999.</p><br>
          
                <p class="text-2xl font-normal text-left text-spacing-tighter text-color-black">Email me</p>

                <p class="text-lg font-normal text-left text-spacing-tight text-color-grey">At <a class="email-link" href="mailtn:dean@deanmiddleton.co.uk">dean@deanmiddleton.co.uk</a> (I will try and get back to within 24 hours)</p><br>

            </div> 

            <div class="con">
                <p class="text-2xl font-normal text-left text-spacing-tighter text-color-black">Or drop me a message below</p><br>

                    <div class="contact-form-inner">
                        <form id="contact-form" onsubmit="submitForm(); return false;">
                            <input id="n" type="text" name="Name" placeholder="*Your name...." required>
                            <input id="e" type="text" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" placeholder="*Email address...." required>
                            <input id="t" type="text" name="Telephone" pattern="[0-9_-]+" placeholder="*Your telephone number...." required>
                            <textarea id="m" name="Message" placeholder="*Write your message here.." rows="5" required></textarea>

                            <div class="contact-bottom-area">
                                <p class="text-sm font-normal text-center text-spacing-tight text-color-black">*mandatory field</p>
                                <input class="button" id="mybtn" style="float:right; padding: 10px;" type="submit" value="CONTACT ME"> <p id="status"></p>
                            </div>
                        </form> 
                    </div>
               
            </div>
               
        </div>
        <p class="text-sm font-2xl text-center text-spacing-tighter text-color-black" id="email-reply"></p>
        <p class="text-sm font-normal text-center text-spacing-tight text-color-black">*Your details will not be shared or used for marketing purposes...</p>
    </div>
</div>

    <script src="<?php echo url_for('style/library.js'); ?>"></script>

<script>

function submitForm(){
   
   ID("mybtn").disabled = true;
   // ID("status").innerHTML = 'please wait ...';
   
   var formdata = new FormData();

   formdata.append( "n", ID("n").value );
   formdata.append( "e", ID("e").value );
   formdata.append( "t", ID("t").value );
   formdata.append( "m", ID("m").value );

   var ajax = new XMLHttpRequest();

   ajax.open( "POST", "../private/shared/sections/parser.php" );

   ajax.onreadystatechange = function() {
       if(ajax.readyState == 4 && ajax.status == 200) {
           if(ajax.responseText == "success"){
               ID("email-reply").innerHTML = '<p>Hi '+ ID("n").value +',<br>Thank you for contacting me, this is just to let you know that I have received your message and I will get back to you within the next 24 hours.<br><br>Many thanks,<br>Dean Middleton</p>';
           } else {
               ID("status").innerHTML = ajax.responseText;
               ID("mybtn").disabled = false;
           }
       }
   }

   ajax.send( formdata );

}



</script>
</body>
</html>