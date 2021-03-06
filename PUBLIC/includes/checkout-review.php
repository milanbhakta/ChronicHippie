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
              <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><a class="step-item active" href="includes/checkout-payment.php">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="czi-card"></i>Payment</div></a><span class="step-item active current">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="czi-check-circle"></i>Review</div></span></div>
          <!-- Order details-->
          <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Review your order</h2>
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
          <!-- Item-->
          <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="includes/productdetails.php?id=<?=$product['id']?>" style="width: 10rem;"><img src="<?=$product['img_src']?>" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="includes/productdetails.php?id=<?=$product['id']?>"><?=$product['title']?></a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span><?=$item['size']?></div>
                <!-- <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>White &amp; Blue</div> -->
                <div class="font-size-lg text-accent pt-2">$<?=number_format($item['quantity']*$product[$size],2)?></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-right" style="max-width: 9rem;">
              <p class="mb-0"><span class="text-muted font-size-sm">Quantity:</span><span>&nbsp;<?=$item['quantity']?></span></p>
              <button class="btn btn-link px-0" type="button"><i class="czi-edit mr-2"></i><span class="font-size-sm">Edit</span></button>
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
          <!-- Client details-->
          <div class="bg-secondary rounded-lg px-4 pt-4 pb-2">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="h6">Shipping to:</h4>
                <ul class="list-unstyled font-size-sm">
                  <li><span class="text-muted">Client:&nbsp;</span>Susan Gardner</li>
                  <li><span class="text-muted">Address:&nbsp;</span>44 Shirley Ave. West Chicago, IL 60185, USA</li>
                  <li><span class="text-muted">Phone:&nbsp;</span>+1 (808) 764 554 330</li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h4 class="h6">Payment method:</h4>
                <ul class="list-unstyled font-size-sm">
                  <li><span class="text-muted">Credit Card:&nbsp;</span>**** **** **** 5300</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Navigation (desktop)-->
          <div class="d-none d-lg-flex pt-4">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="includes/checkout-payment.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Payment</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="includes/checkout-complete.php"><span class="d-none d-sm-inline">Complete order</span><span class="d-inline d-sm-none">Complete</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <h2 class="h6 text-center mb-4">Order summary</h2>
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
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="includes/checkout-payment.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Payment</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="includes/checkout-complete.php"><span class="d-none d-sm-inline">Complete order</span><span class="d-inline d-sm-none">Complete</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <?php include SHARED_PATH.'/footer.php'?>