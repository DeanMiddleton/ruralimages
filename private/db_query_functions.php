<?php

  function all_thumbnails() {
    global $db;

    $sql = "SELECT ref, title, orientation, thumbnail, alt_tag FROM images ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function all_half_pages() {
    global $db;

    $sql = "SELECT ref, title, orientation, half_size, alt_tag FROM images ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function image_by_id($id) {

    global $db;
    $sql = "SELECT * FROM images WHERE ref=$id";
    $result = mysqli_query($db,$sql);
    $image_result = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $image_result;
  }

  function images_by_cat($cat) {

    global $db;

    $sql = "SELECT * FROM images WHERE theme LIKE '%$cat%'";
    $result = mysqli_query($db,$sql);
    // $image_result = mysqli_fetch_assoc($result);
    // mysqli_free_result($result);
    return $result;
  }

  function all_customers() {
    global $db;

    $sql = "SELECT * FROM customer ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function all_images() {
    global $db;

    $sql = "SELECT * FROM images ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function all_products() {
    global $db;

    $sql = "SELECT * FROM products ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function all_orders() {
    global $db;

    $sql = "SELECT * FROM orders ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function all_blogs() {
    global $db;

    $sql = "SELECT * FROM bloggs ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function all_events() {
    global $db;

    $sql = "SELECT * FROM events; ";
    $result = mysqli_query($db,$sql);
    return $result;
  }  

  function customer_by_id($email) {

    global $db;

    $sql = "SELECT * FROM customer WHERE email='" . $email . "'";
    $result = mysqli_query($db,$sql);
    $cust_result = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $cust_result;
  }

  function customer_by_name($name) {

    global $db;

    $sql = "SELECT * FROM customer WHERE name='" . $name . "'";
    $result = mysqli_query($db,$sql);
    $cust_result = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $cust_result;
  }

  function order_by_id($email) {

    global $db;

    $sql = "SELECT * FROM orders WHERE email='" . $email . "'";
    $result = mysqli_query($db,$sql);
    return $result;
  }

  function order_by_ref($order_ref) {

    global $db;
  
    $sql = "SELECT * FROM orders WHERE order_ref='" . $order_ref . "'";
    $result = mysqli_query($db,$sql);
    $order_result = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $order_result;
  }

  function order_line_by_id($order_ref) {

    global $db;

    $sql = "SELECT * FROM order_lines WHERE order_ref='" . $order_ref . "'";
    $result = mysqli_query($db,$sql);
    return $result;
  }

  function admin_by_id($email) {

    global $db;

    $sql = "SELECT * FROM admin WHERE email='" . $email . "'";
    $result = mysqli_query($db,$sql);
    $admin_result = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin_result;
  }

  function add_customer ($name, $email, $password, $d_add_line1, $d_add_line2, $d_add_city, $d_add_county, $d_add_pcode, $i_add_line1, $i_add_line2, $i_add_city, $i_add_county, $i_add_pcode) {

  $hashed_password = password_hash($password,PASSWORD_BCRYPT);

  global $db;

  $sql = "INSERT INTO customer ( ";
  $sql .="name, email, password, d_add_line1, d_add_line2, d_add_city, d_add_county, d_add_pcode, i_add_line1, i_add_line2, i_add_city, i_add_county, i_add_pcode) VALUES (";
  $sql .="'$name','$email','$hashed_password','$d_add_line1','$d_add_line2','$d_add_city','$d_add_county','$d_add_pcode','$i_add_line1','$i_add_line2','$i_add_city','$i_add_county','$i_add_pcode')";
  mysqli_query($db,$sql);
}

function amend_customer ($name, $email, $password, $d_add_line1, $d_add_line2, $d_add_city, $d_add_county, $d_add_pcode, $i_add_line1, $i_add_line2, $i_add_city, $i_add_county, $i_add_pcode) {

  $hashed_password = password_hash($password,PASSWORD_BCRYPT);

  global $db;

  $sql = "UPDATE customer SET ";
  $sql .="name='" . $name . "', email='" . $email . "', password='" . $hashed_password . "', d_add_line1='" . $d_add_line1 . "', d_add_line2='" . $d_add_line2 . "', d_add_city='" . $d_add_city . "', d_add_county='" . $d_add_county . "', d_add_pcode='" . $d_add_pcode . "', i_add_line1='" . $i_add_line1 . "' , i_add_line2='" . $i_add_line2 . "', i_add_city='" . $i_add_city . "', i_add_county='" . $i_add_county . "', i_add_pcode='" . $i_add_pcode . "' ";
  $sql .="WHERE name='" . $name . "'"; 
  mysqli_query($db,$sql);
}

function update_customer_password ($email, $password) {

  $hashed_password = password_hash($password,PASSWORD_BCRYPT);

  global $db;

  $sql = "UPDATE customer SET ";
  $sql .="password='" . $hashed_password . "' ";
  $sql .="WHERE email='" . $email . "'"; 
  mysqli_query($db,$sql);
}

function delete_customer($name) {
  global $db;

  $sql = "DELETE FROM customer ";
  $sql .= "WHERE name='" . $name . "' ";
  $sql .= "LIMIT 1;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function add_blog ($title, $meta_title, $content, $visible, $image, $file_path ) {
  global $db;

  $sql = "INSERT INTO bloggs ( ";
  $sql .="title, meta_title, content, visible, image, path) VALUES ( ";
  $sql .="'$title','$meta_title','$content','$visible','$image','$file_path')";
  mysqli_query($db,$sql);
}

function blog_by_title($title) {

  global $db;

  $sql = "SELECT * FROM bloggs WHERE title='" . $title . "'";
  $result = mysqli_query($db,$sql);
  $blog_result = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $blog_result;
}

function blog_by_ref($ref) {

  global $db;

  $sql = "SELECT * FROM bloggs WHERE ref='" . $ref . "'";
  $result = mysqli_query($db,$sql);
  $blog_result = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $blog_result;
}

function amend_blog ($title, $meta_title, $content, $visible, $image) {
  global $db;

  $sql = "UPDATE bloggs SET ";
  $sql .="title='" . $title . "', meta_title='" . $meta_title . "', content='" . $content . "', visible='" . $visible . "', image='" . $image . "' ";
  $sql .="WHERE title='" . $title . "'"; 
  mysqli_query($db,$sql);
}

function delete_blog($title) {
  global $db;

  $sql = "DELETE FROM bloggs ";
  $sql .= "WHERE title='" . $title . "' ";
  $sql .= "LIMIT 1;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function add_event ($title, $location, $date, $content, $visible, $image) {
  global $db;

  $sql = "INSERT INTO events ( ";
  $sql .="title, location, date, content, visible, image) VALUES ( ";
  $sql .="'$title', '$location', '$date', '$content','$visible','$image')";
  mysqli_query($db,$sql);
}

function event_by_title($title) {

  global $db;

  $sql = "SELECT * FROM events WHERE title='" . $title . "'";
  $result = mysqli_query($db,$sql);
  $events_result = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $events_result;
}

function amend_event ($title, $location, $date, $content, $visible, $image) {
  global $db;

  $sql = "UPDATE events SET ";
  $sql .="title='" . $title . "', location='" . $location . "', date='". $date . "', content='" . $content . "', visible='" . $visible . "', image='" . $image . "' ";
  $sql .="WHERE title='" . $title . "'"; 
  mysqli_query($db,$sql);
}

function delete_event($title) {
  global $db;

  $sql = "DELETE FROM events ";
  $sql .= "WHERE title='" . $title . "' ";
  $sql .= "LIMIT 1;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function add_image ($title, $meta_title, $meta_desc, $alt_tag, $page_desc, $thumbnail, $half_size, $full_size, $orientation, $theme, $prod1_desc, $prod1_price, $prod2_desc, $prod2_price, $prod3_desc, $prod3_price, $prod4_desc, $prod4_price) {
  global $db;

  $sql = "INSERT INTO images ( ";
  $sql .="title, meta_title, meta_desc, alt_tag, page_desc, thumbnail, half_size, full_size, orientation, theme, prod1_desc, prod1_price, prod2_desc, prod2_price, prod3_desc, prod3_price, prod4_desc, prod4_price) VALUES ( ";
  $sql .="'$title', '$meta_title', '$meta_desc', '$alt_tag', '$page_desc','$thumbnail','$half_size','$full_size','$orientation','$theme','$prod1_desc','$prod1_price','$prod2_desc','$prod2_price','$prod3_desc','$prod3_price','$prod4_desc','$prod4_price')";
  mysqli_query($db,$sql);
}

function image_by_title($title) {

  global $db;

  $sql = "SELECT * FROM images WHERE title='" . $title . "'";
  $result = mysqli_query($db,$sql);
  $image_result = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $image_result;
}

function amend_image ($title, $meta_title, $meta_desc, $alt_tag, $page_desc, $thumbnail, $half_size, $full_size, $orientation, $theme, $prod1_desc, $prod1_price, $prod2_desc, $prod2_price, $prod3_desc, $prod3_price, $prod4_desc, $prod4_price) {
  global $db;

  $sql = "UPDATE images SET ";
  $sql .="title='" . $title . "', meta_title='" . $meta_title . "', meta_desc='" . $meta_desc . "', alt_tag='" . $alt_tag . "', page_desc='" . $page_desc . "', thumbnail='" . $thumbnail . "', half_size='" . $half_size . "' , full_size='" . $full_size . "', orientation='" . $orientation . "', theme='" . $theme . "', prod1_desc='" . $prod1_desc . "', prod1_price='" . $prod1_price . "', prod2_desc='" . $prod2_desc . "', prod2_price='" . $prod2_price . "', prod3_desc='" . $prod3_desc . "', prod3_price='" . $prod3_price . "', prod4_desc='" . $prod4_desc . "', prod4_price='" . $prod4_price . "'";
  $sql .="WHERE title='" . $title . "'"; 
  mysqli_query($db,$sql);
}

function delete_image($title) {
  global $db;

  $sql = "DELETE FROM images ";
  $sql .= "WHERE title='" . $title . "' ";
  $sql .= "LIMIT 1;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function add_product ($type, $desc, $price) {
  global $db;

  $sql = "INSERT INTO products ( ";
  $sql .="type, description, price) VALUES ( ";
  $sql .="'$type', '$desc', '$price')";
  mysqli_query($db,$sql);
}


function product_by_type($type) {

  global $db;
  $sql = "SELECT * FROM products WHERE type='" . $type . "'";
  $result = mysqli_query($db,$sql);
  $product_result = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $product_result;
}

function amend_product ($type, $desc, $price) {
  global $db;

  $sql = "UPDATE products SET ";
  $sql .="type='" . $type . "', description='" . $desc . "', price='" . $price . "' ";
  $sql .="WHERE type='" . $type . "'"; 
  mysqli_query($db,$sql);
}

function delete_product($type) {
  global $db;

  $sql = "DELETE FROM products ";
  $sql .= "WHERE type='" . $type . "' ";
  $sql .= "LIMIT 1;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 

function amend_order ($order_ref, $email, $status, $delivery_chg) {
  global $db;

  $sql = "UPDATE orders SET ";
  $sql .="order_ref='" . $order_ref . "', email='" . $email . "', status='" . $status . "', delivery_chg='" . $delivery_chg . "' ";
  $sql .="WHERE order_ref='" . $order_ref . "'"; 
  mysqli_query($db,$sql);
}

function delete_order($order_ref) {
  global $db;

  $sql = "DELETE FROM orders ";
  $sql .= "WHERE order_ref='" . $order_ref . "' ";
  $sql .= "LIMIT 1;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 

function delete_order_line($order_ref) {
  global $db;

  $sql = "DELETE FROM order_lines ";
  $sql .= "WHERE order_ref='" . $order_ref . "' ;";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function add_newsletter_email($email) {
  global $db;

  $sql = "INSERT INTO news_letter ( ";
  $sql .="email) VALUES ( ";
  $sql .="'$email')";
  mysqli_query($db,$sql);
}