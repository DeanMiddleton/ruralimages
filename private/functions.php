<?php

function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
  }


  function u($string="") {
    return urlencode($string);
  }

  function h($string="") {
    return htmlspecialchars($string);
  }


  function customer_order ($cust_name, $cust_email, $order_ref){
    $custName = $cust_name; 
    $custEmail = $cust_email;
    $orderRef = $order_ref;
    $to = "dean@deanmiddleton.co.uk";	
    $from = $custEmail;
    $subject = 'New Customer Order!';
    $message = '<b>Name: </b> '.$custName.' <br><b>Email: </b> '.$custEmail.' <br><b>Order Reference: </b> '.$orderRef;
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $message, $headers) ){
      echo "";
    } else {
      echo "The server failed to send the message. Please try again later.";
    }

    $to = $cust_email;	
    $from = "dean@deanmiddleton.co.uk";
    $subject = 'New Order From Rural Images!';
    $message = '<b>Name: </b> Dean Middleton <br><b>Email: </b> dean@deanmiddleton.co.uk <br><b>Your Order Reference: </b> '.$orderRef.' <br> Thank you for your order please check your portal regularly to see process or your order!';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $message, $headers) ){
      echo "<h4 class='text-xl text-center font-normal text-spacing-tight text-color-main'>Your order and payment has been successful!</h4><br>";
    } else {
      echo "The server failed to send the message. Please try again later.";
    }
  }


  function expireSessionKeys() {
    foreach ($_SESSION["expiries"] as $key => $value) {
         if (time() > $value) { 
            unset($_SESSION[$key]);
         }
    }
}


  function send_code($cust_email, $code) {
    $to = $cust_email;	
    $from = "dean@deanmiddleton.co.uk";
    $subject = 'Password Reset';
    $message = '<b>Name: </b>Rural Images <br>Please enter the following code into the website. <br> Your reset password code is ' . $code;
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $message, $headers) ){
      echo "";
    } else {
      echo "";
    }
  }