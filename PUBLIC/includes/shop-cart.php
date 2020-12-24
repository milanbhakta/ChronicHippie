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
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Your cart</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <!-- List of items-->
        <section class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center pt-3 pb-2 pb-sm-5 mt-1">
            <h2 class="h6 text-light mb-0">Products</h2><a class="btn btn-outline-primary btn-sm pl-2" href=""><i class="czi-arrow-left mr-2"></i>Continue shopping</a>
          </div>

          <?php
                  $cart=$db->query("SELECT * FROM cart WHERE id='{$cart_id}'");
                  $cartitems=mysqli_fetch_assoc($cart);
                  $nums=mysqli_num_rows($cart);
                  $previous_items=[];
                  if(!empty($cartitems)){
                  $previous_items=json_decode($cartitems['items'],true);
                                    $i=1;
                  $sub_total=0;
                  $item_count=0;
                } 
                $nums=count($previous_items);

                ?>
                <?php
                  foreach($previous_items as $item){
                    $product_id=$item['id'];
                    $productQ=$db->query("SELECT * FROM product WHERE id='{$product_id}'");
                    $product=mysqli_fetch_assoc($productQ);
                   
                   ?>
 <!-- Item-->
          <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="includes/productdetails.php?id=<?=$product['id']?>" style="width: 10rem;"><img src="<?=$product['img_src']?>" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="includes/productdetails.php?id=<?=$product['id']?>"><?=$product['title']?></a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span><?=$item['size']?></div>
                <!-- <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>White &amp; Blue</div> -->
                <?php
                 $p="";
                 $size=$item['size'];
                
                ?>
                <div class="font-size-lg text-accent pt-2">$<?=number_format($item['quantity']*$product[$size],2)?></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
              <div class="form-group mb-0">
                <label class="font-weight-medium" for="quantity1">Quantity</label>
                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                <button class="btn btn-outline-secondary" onclick="update_cart('removeone','<?=$product['id']?>','<?=$item['size']?>');">-</button>
                
                 <input class="form-control" type="text" min='1' value="<?=$item['quantity']?>" max="<?=$item['quantity']?>"  style="width:50px;">
               <?php if($item['quantity']<$product['inventory_quantity']):?>
                <button class="btn btn-outline-secondary" onclick="update_cart('addone','<?=$product['id']?>','<?=$item['size']?>');">+</button>
               <?php else:?>
                <button class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="bottom" title="No more Stock">+</button>
               <?php endif;?> 
               
                </div>
              </div>
              <button class="btn btn-link px-0 text-danger" type="button"><i class="czi-close-circle mr-2"></i><span class="font-size-sm">Remove</span></button>
            </div>
          </div>

              <?php
              $item_count+=$item['quantity'];
              $sub_total+=($product[$size]*$item['quantity']);
                  }
              // $tax=TAXRATE * $sub_total;
              // $tax=number_format($tax,2);
              // $grand_total=$tax+$sub_total;    
                ?>
         
        
         
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="text-center mb-4 pb-3 border-bottom">
              <h2 class="h6 mb-3 pb-1">Subtotal</h2>
              <h3 class="font-weight-normal">
                
              $<?=$sub_total?>.<small>00</small></h3>
            </div>
             <div class="form-group mb-4">
              <label class="mb-3" for="order-comments"><span class="badge badge-info font-size-xs mr-2">Note</span><span class="font-weight-medium">Additional comments</span></label>
              <textarea class="form-control" rows="6" id="order-comments"></textarea>
            </div> 
            <!-- <div class="accordion" id="order-options">
              <div class="card">
                <div class="card-header">
                  <h3 class="accordion-heading"><a href="#promo-code" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="promo-code">Apply promo code<span class="accordion-indicator"></span></a></h3>
                </div>
                <div class="collapse show" id="promo-code" data-parent="#order-options">
                  <form class="card-body needs-validation" method="post" novalidate>
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Promo code" required>
                      <div class="invalid-feedback">Please provide promo code.</div>
                    </div>
                    <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
                  </form>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h3 class="accordion-heading"><a class="collapsed" href="#shipping-estimates" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shipping-estimates">Shipping estimates<span class="accordion-indicator"></span></a></h3>
                </div>
                <div class="collapse" id="shipping-estimates" data-parent="#order-options">
                  <div class="card-body">
                    <form class="needs-validation" novalidate>
                      <div class="form-group">
                        <select class="form-control custom-select" required>
                          <option value="">Choose your country</option>
                          <option value="Australia">Australia</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Canada">Canada</option>
                          <option value="Finland">Finland</option>
                          <option value="Mexico">Mexico</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="United States">United States</option>
                        </select>
                        <div class="invalid-feedback">Please choose your country!</div>
                      </div>
                      <div class="form-group">
                        <select class="form-control custom-select" required>
                          <option value="">Choose your city</option>
                          <option value="Bern">Bern</option>
                          <option value="Brussels">Brussels</option>
                          <option value="Canberra">Canberra</option>
                          <option value="Helsinki">Helsinki</option>
                          <option value="Mexico City">Mexico City</option>
                          <option value="Ottawa">Ottawa</option>
                          <option value="Washington D.C.">Washington D.C.</option>
                          <option value="Wellington">Wellington</option>
                        </select>
                        <div class="invalid-feedback">Please choose your city!</div>
                      </div>
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="ZIP / Postal code" required>
                        <div class="invalid-feedback">Please provide a valid zip!</div>
                      </div>
                      <button class="btn btn-outline-primary btn-block" type="submit">Calculate shipping</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
            
            <a class="btn btn-primary btn-shadow btn-block mt-4" href="includes/checkout-details.php
            "><i class="czi-card font-size-lg mr-2"></i>Proceed to Checkout</a>
          </div>
        </aside>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <?php include SHARED_PATH.'/footer.php'?>