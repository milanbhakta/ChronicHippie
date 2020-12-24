<?php require_once('../../private/initialize.php');
    include SHARED_PATH.'/header.php';
    include SHARED_PATH.'/navigation.php';
?>
    <!-- Page title-->
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Checkout</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <section class="col-lg-8">
          <!-- Steps-->
          <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="includes/shop-cart.php">
              <div class="step-progress"><span class="step-count">1</span></div>
              <div class="step-label"><i class="czi-cart"></i>Cart</div></a><a class="step-item active" href="includes/checkout-details.php">
              <div class="step-progress"><span class="step-count">2</span></div>
              <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><span class="step-item active current" href="">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="czi-card"></i>Payment</div></span><span class="step-item">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="czi-check-circle"></i>Review</div></span></div>
          <!-- Payment methods accordion-->
          <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
          <div class="accordion box-shadow-sm mb-4" id="payment-methods">
          <div class="card">
                      <div class="card-header py-3 px-3">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="license" id="payment-transfer">
                          <label class="custom-control-label font-weight-medium text-dark" for="payment-transfer" data-toggle="collapse" data-target="#transfer">E-Transfer<i class="czi-wallet text-muted font-size-lg align-middle mt-n1 ml-2"></i></label>
                        </div>
                      </div>
                      <div class="collapse" id="transfer" data-parent="#payment-methods">
                        <div class="card-body">
                          <p class="font-size-sm mb-0">I will pay with E-transfer to the hippy@gmail.com wiht order number.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header py-3 px-3">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="license" id="payment-cash">
                          <label class="custom-control-label font-weight-medium text-dark" for="payment-cash" data-toggle="collapse" data-target="#cash">Cash on delivery<i class="czi-wallet text-muted font-size-lg align-middle mt-n1 ml-2"></i></label>
                        </div>
                      </div>
                      <div class="collapse" id="cash" data-parent="#payment-methods">
                        <div class="card-body">
                          <p class="font-size-sm mb-0">I will pay with cash to the courier on delivery.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="pt-2">
                    <button class="btn btn-primary btn-block" type="submit">Place Order</button>
                  </div> -->
          <!-- Navigation (desktop)-->
          <div class="d-none d-lg-flex pt-4">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="includes/checkout-details.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Details</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="includes/checkout-review.php"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="widget mb-3">
              <h2 class="widget-title text-center">Order summary</h2>
              <?php
                  $cart=$db->query("SELECT * FROM cart WHERE id='{$cart_id}'");
                  $cartitems=mysqli_fetch_assoc($cart);
                  $nums=mysqli_num_rows($cart);

                  if(!empty($cartitems)){
                  $previous_items=json_decode($cartitems['items'],true);
                                    $i=1;
                  $sub_total=0;
                  $item_count=0;
                } 
              

                ?>
                <?php
                  foreach($previous_items as $item){
                    $product_id=$item['id'];
                    $productQ=$db->query("SELECT * FROM product WHERE id='{$product_id}'");
                    $product=mysqli_fetch_assoc($productQ);
                   
                   ?>
              <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="includes/productdetails.php?id=<?=$product['id']?>"><img width="64" src="<?=$product['img_src']?>" alt="Product"/></a>
                <div class="media-body">
                  <h6 class="widget-product-title"><a href="includes/productdetails.php?id=<?=$product['id']?>"><?=$product['title']?></a></h6>
                  <div class="widget-product-meta"><span class="text-accent mr-2">$<?=$item['quantity']*$product[$size]?><small>.00</small></span><span class="text-muted">x <?=$item['quantity']?></span></div>
                </div>
              </div>
              <?php
              $item_count+=$item['quantity'];
              $sub_total+=($product[$size]*$item['quantity']);
                  }
              $tax=TAXRATE * $sub_total;
              $tax=number_format($tax,2);
              $grand_total=$tax+$sub_total; 
              
              $grand_total=number_format($grand_total,2);
                ?>
            </div>
            <ul class="list-unstyled font-size-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">$<?=$sub_total?>.<small>00</small></span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right">—</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">$<?=$tax?></span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right">—</span></li>
            </ul>
            <h3 class="font-weight-normal text-center my-4">$<?=$grand_total?></h3>
            <form class="needs-validation" method="post" novalidate>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Promo code" required>
                <div class="invalid-feedback">Please provide promo code.</div>
              </div>
              <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
            </form>
          </div>
        </aside>
      </div>
      <!-- Navigation (mobile)-->
      <div class="row d-lg-none">
        <div class="col-lg-8">
          <div class="d-flex pt-4 mt-3">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="includes/checkout-details.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="includes/checkout-review.php"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <?php include SHARED_PATH.'/footer.php'?>