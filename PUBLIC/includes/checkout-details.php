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
              <li class="breadcrumb-item"><a class="text-nowrap" href=""><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="">Shop</a>
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
              <div class="step-label"><i class="czi-cart"></i>Cart</div></a><a class="step-item active current" href="#">
              <div class="step-progress"><span class="step-count">2</span></div>
              <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><span class="step-item">
             
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="czi-card"></i>Payment</div></span><span class="step-item">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="czi-check-circle"></i>Review</div></span></div>
          <!-- Autor info-->
          <!-- <div class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-lg mb-grid-gutter">
            <div class="media align-items-center">
              <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span class="badge badge-warning" data-toggle="tooltip" title="Reward points">384</span><img class="rounded-circle" src="img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
              <div class="media-body pl-3">
                <h3 class="font-size-base mb-0">Susan Gardner</h3><span class="text-accent font-size-sm">s.gardner@example.com</span>
              </div>
            </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="account-profile.html"><i class="czi-edit mr-2"></i>Edit profile</a>
          </div> -->
          <!-- Shipping address-->
          <div style="display:block">
          <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-fn">First Name</label>
                <input class="form-control" type="text" id="checkout-fn">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-ln">Last Name</label>
                <input class="form-control" type="text" id="checkout-ln">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-email">E-mail Address</label>
                <input class="form-control" type="email" id="checkout-email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-phone">Phone Number</label>
                <input class="form-control" type="text" id="checkout-phone">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-company">Company</label>
                <input class="form-control" type="text" id="checkout-company">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-country">Country</label>
                <select class="form-control custom-select" id="checkout-country">
                  <option>Choose country</option>
                  
                  <option>Canada</option>
                  
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-city">Country</label>
                <select class="form-control custom-select" id="checkout-city">
                  <option>Choose city</option>
                  
                  <option>LONDON</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-zip">ZIP Code</label>
                <input class="form-control" type="text" id="checkout-zip">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-address-1">Address 1</label>
                <input class="form-control" type="text" id="checkout-address-1">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="checkout-address-2">Address 2</label>
                <input class="form-control" type="text" id="checkout-address-2">
              </div>
            </div>
          </div>
         </div>
         <br>
         <br>
         <div style="display:none">
          <h2 class="h6 pb-3 mb-2">Choose shipping method</h2>
          <div class="table-responsive">
            <table class="table table-hover font-size-sm border-bottom">
              <thead>
                <tr>
                  <th class="align-middle"></th>
                  <th class="align-middle">Shipping method</th>
                  <th class="align-middle">Delivery time</th>
                  <th class="align-middle">Handling fee</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="courier" name="shipping-method" checked>
                      <label class="custom-control-label" for="courier"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Courier</span><br><span class="text-muted">All addresses (default zone), United States &amp; Canada</span></td>
                  <td class="align-middle">2 - 4 days</td>
                  <td class="align-middle">$26.50</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="local" name="shipping-method">
                      <label class="custom-control-label" for="local"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Local Shipping</span><br><span class="text-muted">All addresses (default zone), United States &amp; Canada</span></td>
                  <td class="align-middle">up to one week</td>
                  <td class="align-middle">$10.00</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="flat" name="shipping-method">
                      <label class="custom-control-label" for="flat"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Flat Rate</span><br><span class="text-muted">All addresses (default zone)</span></td>
                  <td class="align-middle">5 - 7 days</td>
                  <td class="align-middle">$33.85</td>
                </tr>
                
              </tbody>
            </table>
          </div>
          </div>
          <!-- Navigation (desktop)-->
          <div class="d-none d-lg-flex pt-4 mt-3">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="includes/shop-cart.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="includes/checkout-payment.php"><span class="d-none d-sm-inline">Proceed to Payments</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
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
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="widget mb-3">
              <h2 class="widget-title text-center">Order summary</h2>
              <?php
              $product=[];
                  foreach($previous_items as $item){
                    $product_id=$item['id'];
                    $productQ=$db->query("SELECT * FROM product WHERE id='{$product_id}'");
                    $product=mysqli_fetch_assoc($productQ);
                  
                   ?>
                
              <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href=""><img width="64" src="<?=$product['img_src']?>" alt="Product"/></a>
                <div class="media-body">
                  <h6 class="widget-product-title"><a href="includes/productdetails.php?id=<?=$product['id']?>"><?=$product['title']?></a></h6>
                  <div class="widget-product-meta"><span class="text-accent mr-2">$<?=number_format($item['quantity']*$product[$size],2)?></span><span class="text-muted">x <?=$item['quantity']?></span></div>
                </div>
              </div>
             <?php
            $item_count+=$item['quantity'];
            $sub_total+=($product[$size]*$item['quantity']);}
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
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="includes/shop-cart.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="includes/checkout-payment.php"><span class="d-none d-sm-inline">Proceed to Payment</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <?php include SHARED_PATH.'/footer.php'?>