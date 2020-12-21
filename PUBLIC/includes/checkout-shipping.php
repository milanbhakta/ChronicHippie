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
          <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
              <div class="step-progress"><span class="step-count">1</span></div>
              <div class="step-label"><i class="czi-cart"></i>Cart</div></a><a class="step-item active" href="checkout-details.html">
              <div class="step-progress"><span class="step-count">2</span></div>
              <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><a class="step-item active current" href="checkout-shipping.html">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="czi-package"></i>Shipping</div></a><a class="step-item" href="checkout-payment.html">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="czi-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
              <div class="step-progress"><span class="step-count">5</span></div>
              <div class="step-label"><i class="czi-check-circle"></i>Review</div></a></div>
          <!-- Shipping methods table-->
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
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="ups" name="shipping-method">
                      <label class="custom-control-label" for="ups"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">UPS Ground Shipping</span><br><span class="text-muted">All addresses (default zone)</span></td>
                  <td class="align-middle">4 - 6 days</td>
                  <td class="align-middle">$18.00</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="pickup" name="shipping-method">
                      <label class="custom-control-label" for="pickup"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Local Pickup from store</span><br><span class="text-muted">All addresses (default zone)</span></td>
                  <td class="align-middle">&mdash;</td>
                  <td class="align-middle">$0.00</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="locker" name="shipping-method">
                      <label class="custom-control-label" for="locker"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Pick Up at Cartzilla Locker</span><br><span class="text-muted">All addresses (default zone), United States &amp; Canada</span></td>
                  <td class="align-middle">&mdash;</td>
                  <td class="align-middle">$9.99</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="global-export" name="shipping-method">
                      <label class="custom-control-label" for="global-export"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Cartzilla Global Export</span><br><span class="text-muted font-size-sm">All addresses (default zone), outside United States</span></td>
                  <td class="align-middle">3 - 4 days</td>
                  <td class="align-middle">$25.00</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="same-day" name="shipping-method">
                      <label class="custom-control-label" for="same-day"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">Same-Day Delivery</span><br><span class="text-muted">Only United States</span></td>
                  <td class="align-middle">&mdash;</td>
                  <td class="align-middle">$34.00</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-radio mb-4">
                      <input class="custom-control-input" type="radio" id="international" name="shipping-method">
                      <label class="custom-control-label" for="international"></label>
                    </div>
                  </td>
                  <td class="align-middle"><span class="text-dark font-weight-medium">International Shipping</span><br><span class="text-muted">All addresses (default zone)</span></td>
                  <td class="align-middle">up to 15 days</td>
                  <td class="align-middle">$27.00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Navigation (desktop)-->
          <div class="d-none d-lg-flex pt-4">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout-details.html"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Adresses</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-payment.html"><span class="d-none d-sm-inline">Proceed to Payment</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="widget mb-3">
              <h2 class="widget-title text-center">Order summary</h2>
              <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/01.jpg" alt="Product"/></a>
                <div class="media-body">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                  <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/02.jpg" alt="Product"/></a>
                <div class="media-body">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                  <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/03.jpg" alt="Product"/></a>
                <div class="media-body">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                  <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/04.jpg" alt="Product"/></a>
                <div class="media-body">
                  <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                  <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                </div>
              </div>
            </div>
            <ul class="list-unstyled font-size-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">$265.<small>00</small></span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right">—</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">$9.<small>50</small></span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right">—</span></li>
            </ul>
            <h3 class="font-weight-normal text-center my-4">$274.<small>50</small></h3>
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
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout-details.html"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Adresses</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-payment.html"><span class="d-none d-sm-inline">Proceed to Payment</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <?php include SHARED_PATH.'/footer.php'?>