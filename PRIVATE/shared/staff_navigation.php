<body class="toolbar-enabled">
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Add Payment Method-->
    <!-- <form class="needs-validation modal fade" method="post" id="add-payment" tabindex="-1" novalidate>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add a payment method</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="custom-control custom-radio mb-4">
              <input class="custom-control-input" type="radio" id="paypal" name="payment-method">
              <label class="custom-control-label" for="paypal">PayPal<img class="d-inline-block align-middle ml-2" src="img/card-paypal.png" width="39" alt="PayPal"></label>
            </div>
            <div class="custom-control custom-radio mb-4">
              <input class="custom-control-input" type="radio" id="card" name="payment-method" checked>
              <label class="custom-control-label" for="card">Credit / Debit card<img class="d-inline-block align-middle ml-2" src="img/cards.png" width="187" alt="Credit card"></label>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                <div class="invalid-feedback">Please fill in the card number!</div>
              </div>
              <div class="form-group col-sm-6">
                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                <div class="invalid-feedback">Please provide name on the card!</div>
              </div>
              <div class="form-group col-sm-3">
                <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                <div class="invalid-feedback">Please provide card expiration date!</div>
              </div>
              <div class="form-group col-sm-3">
                <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                <div class="invalid-feedback">Please provide card CVC code!</div>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-primary btn-block mt-0" type="submit">Register this card</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form> -->
    <!-- Navbar Marketplace-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="bg-light box-shadow-sm navbar-sticky">
      <div class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="staff/" style="min-width: 7rem;"><img width="142" src="img/Logo.jpeg" alt="Chronic Hippie"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="staff/" style="min-width: 4.625rem;"><img width="74" src="img/Logo.jpeg" alt="Chronic Hippie"/></a>
          <!-- Toolbar-->
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
            <a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites.html"><span class="navbar-tool-tooltip">Favorites</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a>
            <div class="navbar-tool dropdown ml-2">
              <a class="navbar-tool-icon-box border dropdown-toggle" href="staff/">
                <img width="32" src="img/marketplace/account/avatar-sm.png" alt=""/></a><a class="navbar-tool-text ml-n1" href="staff/">Welcome <?=$user_data['first']?></a>
              <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
                <h6 class="dropdown-header">Account</h6><a class="dropdown-item d-flex align-items-center" href="staff/includes/dashboard-settings.php"><i class="czi-settings opacity-60 mr-2"></i>Settings</a>
                <!-- <a class="dropdown-item d-flex align-items-center" href="dashboard-purchases.html"><i class="czi-basket opacity-60 mr-2"></i>Purchases</a> -->

                <?php if(has_permission('admin')):?>

                <a class="dropdown-item d-flex align-items-center" href="staff/includes/users.php"><i class="czi-heart opacity-60 mr-2"></i>Users<span class="font-size-xs text-muted ml-auto">4</span></a>
                <?php endif;?>    
                <a class="dropdown-item d-flex align-items-center" href="staff/includes/account-changepassword.php"><i class="czi-key opacity-60 mr-2"></i>Change Password</a>
                  <!-- <i class="czi-dollar opacity-60 mr-2"></i>Sales<span class="font-size-xs text-muted ml-auto">$1,375.00</span></a> -->
                  <!-- <a class="dropdown-item d-flex align-items-center" href="dashboard-products.html">
                  <i class="czi-package opacity-60 mr-2"></i>Products<span class="font-size-xs text-muted ml-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-add-new-product.html">
                  <i class="czi-cloud-upload opacity-60 mr-2"></i>Add New Product</a> -->
                <!-- <a class="dropdown-item d-flex align-items-center" href="dashboard-payouts.html">
                  <i class="czi-currency-exchange opacity-60 mr-2"></i>Payouts</a> -->
                <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="staff/includes/account-logout.php"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
              </div>
            </div>
            
          </div>
          <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
            <!-- Search-->
            <div class="input-group-overlay d-lg-none my-3">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control prepended-form-control" type="text" placeholder="Search Chronic Hippie">
            </div>
            <!-- Categories dropdown-->
            <!-- <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-menu align-middle mt-n1 mr-2"></i>Categories</a>
                <ul class="dropdown-menu py-1">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Photos</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item product-title font-weight-medium"><a href="#">All Photos<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Abstract</a></li>
                      <li><a class="dropdown-item" href="#">Animals</a></li>
                      <li><a class="dropdown-item" href="#">Architecture</a></li>
                      <li><a class="dropdown-item" href="#">Beauty &amp; Fashion</a></li>
                      <li><a class="dropdown-item" href="#">Business</a></li>
                      <li><a class="dropdown-item" href="#">Education</a></li>
                      <li><a class="dropdown-item" href="#">Food &amp; Drink</a></li>
                      <li><a class="dropdown-item" href="#">Holidays</a></li>
                      <li><a class="dropdown-item" href="#">Industrial</a></li>
                      <li><a class="dropdown-item" href="#">People</a></li>
                      <li><a class="dropdown-item" href="#">Sports</a></li>
                      <li><a class="dropdown-item" href="#">Technology</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Graphics</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item product-title font-weight-medium"><a href="#">All Graphics<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Icons</a></li>
                      <li><a class="dropdown-item" href="#">Illustartions</a></li>
                      <li><a class="dropdown-item" href="#">Patterns</a></li>
                      <li><a class="dropdown-item" href="#">Textures</a></li>
                      <li><a class="dropdown-item" href="#">Web Elements</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">UI Design</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item product-title font-weight-medium"><a href="#">All UI Design<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">PSD Templates</a></li>
                      <li><a class="dropdown-item" href="#">Sketch Templates</a></li>
                      <li><a class="dropdown-item" href="#">Adobe XD Templates</a></li>
                      <li><a class="dropdown-item" href="#">Figma Templates</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Web Themes</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item product-title font-weight-medium"><a href="#">All Web Themes<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">WordPress Themes</a></li>
                      <li><a class="dropdown-item" href="#">Bootstrap Themes</a></li>
                      <li><a class="dropdown-item" href="#">eCommerce Templates</a></li>
                      <li><a class="dropdown-item" href="#">Muse Templates</a></li>
                      <li><a class="dropdown-item" href="#">Plugins</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Fonts</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item product-title font-weight-medium"><a href="#">All Fonts<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Blackletter</a></li>
                      <li><a class="dropdown-item" href="#">Display</a></li>
                      <li><a class="dropdown-item" href="#">Non Western</a></li>
                      <li><a class="dropdown-item" href="#">Sans Serif</a></li>
                      <li><a class="dropdown-item" href="#">Script</a></li>
                      <li><a class="dropdown-item" href="#">Serif</a></li>
                      <li><a class="dropdown-item" href="#">Slab Serif</a></li>
                      <li><a class="dropdown-item" href="#">Symbols</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Add-Ons</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item product-title font-weight-medium"><a href="#">All Add-Ons<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Photoshop Add-Ons</a></li>
                      <li><a class="dropdown-item" href="#">Illustrator Add-Ons</a></li>
                      <li><a class="dropdown-item" href="#">Sketch Plugins</a></li>
                      <li><a class="dropdown-item" href="#">Procreate Brushes</a></li>
                      <li><a class="dropdown-item" href="#">InDesign Palettes</a></li>
                      <li><a class="dropdown-item" href="#">Lightroom Presets</a></li>
                      <li><a class="dropdown-item" href="#">Other Software</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul> -->
            <!-- Primary menu-->
            <!-- <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="index.html">Back to main demo</a></li>
            </ul> -->
          </div>
        </div>
      </div>
      <!-- Search collapse-->
      <div class="search-box collapse" id="searchBox">
        <div class="card pt-2 pb-4 border-0 rounded-0">
          <div class="container">
            <div class="input-group-overlay">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control prepended-form-control" type="text" placeholder="Search Chronic Hippie">
            </div>
          </div>
        </div>
      </div>
    </header> 
    <div class="container mb-5 pb-3">
      <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
    <!-- Sidebar-->
<aside class="col-lg-4">
            <!-- Account menu toggler (hidden on screens larger 992px)-->
            <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-toggle="collapse"><i class="czi-menu mr-2"></i>Account menu</a></div>
            <!-- Actual menu-->
            <div class="cz-sidebar-static h-100 p-0">
              <div class="secondary-nav collapse border-right" id="account-menu">
                <!-- <div class="bg-secondary p-4">
                  <h3 class="font-size-sm mb-0 text-muted">Account</h3>
                </div> -->
                <!-- <ul class="list-unstyled mb-0"> -->
                  <!-- <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="staff/includes/dashboard-settings.php"><i class="czi-settings opacity-60 mr-2"></i>Settings</a></li> -->
                  <!-- <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.html"><i class="czi-basket opacity-60 mr-2"></i>Purchases</a></li> -->
                  <!-- <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html"><i class="czi-heart opacity-60 mr-2"></i>Favorites<span class="font-size-sm text-muted ml-auto">4</span></a></li> -->
                <!-- </ul> -->
                <div class="bg-secondary p-4">
                  <h3 class="font-size-sm mb-0 text-muted">Seller Dashboard</h3>
                </div>
                <ul class="list-unstyled mb-0">
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="staff/includes/dashboard-categories.php"><i class="czi-package opacity-60 mr-2"></i>Categories<span class="font-size-sm text-muted ml-auto">5</span></a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="staff/includes/dashboard-products.php"><i class="czi-package opacity-60 mr-2"></i>Products<span class="font-size-sm text-muted ml-auto">5</span></a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="staff/includes/dashboard-add-new-product.php"><i class="czi-cloud-upload opacity-60 mr-2"></i>Add New Product</a></li>
                  <!-- <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="staff/includes/dashboard-payouts.html"><i class="czi-currency-exchange opacity-60 mr-2"></i>Payouts</a></li> -->
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="staff/includes/account-logout.php"><i class="czi-sign-out opacity-60 mr-2"></i>Sign out</a></li>
                </ul>
              </div>
            </div>
          </aside>