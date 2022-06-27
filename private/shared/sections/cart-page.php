<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('style/stylesheets/cart-page.css'); ?>">   
</head>
<body>

<div class="container">
    <div id="cart">

<?php
      if(!isset($countLine)) {$countLine;}; // define countline variable if not
      
      // if there is any orderline display cart
      if ($countLine > 0) {
     
?>

      <!-- SHOPPING CART -->

      <div class="col-60-40" style="max-width: 1000px;">
          <div class="container" style="max-width: 500px; margin: 0 auto;">
          
<?php         
              echo "<h2 class='txt-sub txt-normal'>Shopping Cart (" . $countLine . ")</h2>";
              $orderTotal = 0;
              $counter = 0;
                  foreach ($_SESSION['orders'] as $orderline) {
                      $orderTotal = $orderTotal + $orderline['total'];

                      if($orderTotal==1 || $orderTotal>100) {$delivery = 0;} else {$delivery = $postPacking;}
                      $grandTotal = $orderTotal + $delivery;
?>

              <div class="cart__order-line-details">
                  <?php $imagefile = image_by_id($orderline['image-number']);?>
                      <div class="cart-thumb-outer">
                          <?php echo  "<img class='" . $imagefile['orientation'] . "' src='" . url_for( $imagefile['thumbnail']) . "' alt='" . $imagefile['thumbnail'] . "'>"; ?>
                      </div>

                  <div class="cart__line-details-outer">
                      <?php echo "<p class='txt-sub'>" . $orderline['image'] . "</p>
                                  <p class='txt-detail'>". $orderline['size'] ."</p>
                                  <p class='txt-main'> £". $orderline['cost'] ."</p>
                                  <p class='txt-main'>Quantity : ". $orderline['quantity'] ."</p>" ?><br>

                      <div class="cart__edit-outer">    
                          <a class='cart__edit-icon-outer' href='<?php echo url_for('cart.php?line-number=' . $counter);?>'>
                              <?php $counter++ ?>             
                              <img class="cart__small-icon" src="<?php echo url_for('style/assets/logos/bin.png'); ?>" alt="">
                              <p class='cart__icon-text'>remove</p>
                          </a>
                      </div>
                  </div>
              </div>
            
<?php
                  }
?>                
        </div>

          <!-- CART SUMMARY -->
          <div class="cart__order-total-outer">
              <div class="cart__order-total-inner">
                  <!-- go back to gallery -->
                  <?php echo $clearLogS; ?>
                  <a class="cart__go-shopping" href="<?php echo url_for('gallery.php'); ?>">Continue Shopping</a>
                  <?php echo $clearLogE; ?>
                  <!-- order totals -->
                  <div class="cart__sub-total-outer">
                      <?php echo "<p class='txt-main txt-left'>Sub-Total:</p><p class='txt-main txt-right'>£" . $orderTotal . "</p>" ?>
                  </div>
                  <div class="cart__sub-total-outer">
                      <?php echo "<p class='txt-detail'>Excluding Delivery</p><p class='txt-detail txt-right'>£" . $delivery . "</p>" ?><br>
                  </div>
                  <div class="cart__sub-total-outer">
                      <?php echo "<p class='txt-detail'>Grand Total</p><p class='txt-main txt-right'>£" . $grandTotal . "</p>" ?><br>
                  </div>

                  <!-- create customer acct or loggin button will disapear when loggin in -->
                  <?php echo $clearLogS; ?>
                      <p class="text-sm text-center text-spacing-tight">You will need an account login to track you order and thus we can<br>inform you of progress. (This will not be used for marketing purposes.)<br>(Ensure you are happy with your order before proceeding, Thank You!</p><br>
                      <form  action="<?php echo url_for('create_cust.php'); ?>" method="POST">
                          <input class="cart__go-shopping" type="submit" name="status" value="Login/Create Customer Account">
                      </form>    
                  <?php echo $clearLogE; ?>


                  <p class="text-2xl text-center text-spacing-tighter text-bold" style="margin-top: 5px; margin-bottom: 5px;">Payment Checkout</p>

                  <!-- PAYPAL BUTTON -->               
                  <div id="paypal-button-container"></div>

                          <div id="smart-button-container">
                            <div style="text-align: center;">
                              <div id="smart-button-container">
                                <div style="text-align: center;">
                                  <div id="paypal-button-container"></div>
                                </div>
                              </div>

                        <script src="https://www.paypal.com/sdk/js?client-id=AZ0DtFIc-SaJD1WjteSl4kUL6hGepD4kNhXkIz7AVx_M5p03zenTnfzPR2QbDWTP8nl4g0oLvhXWP-fB&currency=GBP" data-sdk-integration-source="button-factory"></script>

                        <script>
                            function initPayPalButton() {
                              paypal.Buttons({
                              style: {
                              shape: 'pill',
                              color: 'gold',
                              layout: 'vertical',
                              label: 'paypal',
                            },

                          createOrder: function(data, actions) {
                            return actions.order.create({
                              purchase_units: [{"description":"Rural Images Original Prints","amount":{"currency_code":"GBP","value":<?php echo $grandTotal; ?>,"breakdown":{"item_total":{"currency_code":"GBP","value":<?php echo $orderTotal; ?>},"shipping":{"currency_code":"GBP","value":<?php echo $delivery; ?>},"tax_total":{"currency_code":"GBP","value":0}}}}]
                            });
                          },

                          onApprove: function(data, actions) {
                            return actions.order.capture().then(function(orderData) {
                              
                              // Full available details
                              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                              // Show a success message within this page, e.g.
                              const element = document.getElementById('paypal-button-container');
                              element.innerHTML = '';
                              element.innerHTML = '<h3>Thank you for your payment!</h3>'; // needs improving

                              window.location.href = "summary.php";
                              // redirect to thank you page that summarise the order / take a email for updates / store order (or send an email to me). then clear order out of cached data.
                              
                            });
                          },
                          onError: function(err) {
                            console.log(err);
                          }
                        }).render('#paypal-button-container');
                      }
                      initPayPalButton();
                    </script>             
                            </div>
                          </div>
            

        <!-- DELIVERY NOTICE -->
              </div>
                  <div class="cart__del-outer">
                      <p class="txt-main">Delivery Options</p>
                      <p class="txt-detail">Standard Delivery / Packing: £9.99</p>
                      <p class="txt-detail">Free for orders over £100</p>
                      <p class="txt-detail">Delivery in 10-14 Days</p>
                  </div>
          </div>

<?php
         } else {
?>
            <!-- if no order display empty basket -->
            <div class="main-con">
            <!-- EMPTY BASKET -->
                <div class="cart__empty">
                  <h2 class='txt-sub txt-center'>Your basket appears to be empty!</h2>
                  <img class="cart__logo" src="<?php echo url_for('style/assets/logos/shopping-cart-icon.png'); ?>" alt="">
                
                </div>
            </div>
<?php
          }
?>
      </div>
    </div>
</div>

<script src="<?php echo url_for('style/library.js'); ?>"></script>
</body>
</html>

