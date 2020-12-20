<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Checkout
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
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
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
      <!-- Topbar-->
      <div class="topbar topbar-dark bg-dark">
        <div class="container">
          <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Useful links</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="tel:00331697720"><i class="czi-support text-muted mr-2"></i>(00) 33 169 7720</a></li>
              <li><a class="dropdown-item" href="order-tracking.html"><i class="czi-location text-muted mr-2"></i>Order tracking</a></li>
            </ul>
          </div>
          <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="czi-support"></i><span class="text-muted mr-1">Support</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
          <div class="cz-carousel cz-controls-static d-none d-md-block">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
              <div class="topbar-text">Free shipping for order over $200</div>
              <div class="topbar-text">We return money within 30 days</div>
              <div class="topbar-text">Friendly 24/7 customer support</div>
            </div>
          </div>
          <div class="ml-3 text-nowrap"><a class="topbar-link mr-4 d-none d-md-inline-block" href="order-tracking.html"><i class="czi-location"></i>Order tracking</a>
            <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / $</a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item">
                  <select class="custom-select custom-select-sm">
                    <option value="usd">$ USD</option>
                    <option value="eur">€ EUR</option>
                    <option value="ukp">£ UKP</option>
                    <option value="jpy">¥ JPY</option>
                  </select>
                </li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/fr.png" alt="Français"/>Français</a></li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/de.png" alt="Deutsch"/>Deutsch</a></li>
                <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/it.png" alt="Italiano"/>Italiano</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container"><a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0" href="index.html" style="min-width: 7rem;"><img width="142" src="img/logo-dark.png" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2" href="index.html" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon.png" alt="Cartzilla"/></a>
            <div class="input-group-overlay d-none d-lg-flex mx-4">
              <input class="form-control appended-form-control" type="text" placeholder="Search for products">
              <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            </div>
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-menu"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span class="navbar-tool-tooltip">Wishlist</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a><a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>
              <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>$265.00</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/01.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/02.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/03.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="img/shop/cart/widget/04.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout-details.html"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group-overlay d-lg-none my-3">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
              </div>
              <!-- Departments menu-->
              <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid mr-2"></i>Departments</a>
                  <div class="dropdown-menu px-2 pl-0 pb-4">
                    <div class="d-flex flex-wrap flex-md-nowrap">
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/01.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Clothing</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Women's clothing</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Men's clothing</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/02.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Shoes</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Women's shoes</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Men's shoes</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/03.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Gadgets</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">E-book readers</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap flex-md-nowrap">
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/04.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Furniture &amp; Decor</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Home furniture</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Office furniture</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/05.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Accessories</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Hats</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Bags</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/06.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Entertainment</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's toys</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Video games</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="img/home/preview/th01.jpg" alt="Fashion Store v.1"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="img/home/preview/th03.jpg" alt="Electronics Store"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="img/home/preview/th04.jpg" alt="Marketplace"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="img/home/preview/th06.jpg" alt="Grocery Store"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="img/home/preview/th07.jpg" alt="Food Delivery Service"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="img/home/preview/th02.jpg" alt="Fashion Store v.2"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="img/home/preview/th05.jpg" alt="Single Product / Brand Store"/></a></div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
                  <div class="dropdown-menu p-0">
                    <div class="d-flex flex-wrap flex-md-nowrap px-2">
                      <div class="mega-dropdown-column py-4 px-3">
                        <div class="widget widget-links mb-3">
                          <h6 class="font-size-base mb-3">Shop layouts</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                          </ul>
                        </div>
                        <div class="widget widget-links">
                          <h6 class="font-size-base mb-3">Marketplace</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column py-4 px-3">
                        <div class="widget widget-links">
                          <h6 class="font-size-base mb-3">Shop pages</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column py-4 pr-3">
                        <div class="widget widget-links mb-3">
                          <h6 class="font-size-base mb-3">Grocery store</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                          </ul>
                        </div>
                        <div class="widget widget-links">
                          <h6 class="font-size-base mb-3">Food Delivery</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Shop User Account</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                        <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                        <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                        <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                        <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                        <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vendor Dashboard</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                        <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                        <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                        <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                        <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                        <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                        <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                    <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navbar Variants</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                        <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                        <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                        <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                        <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                        <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                        <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                        <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                        <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                        <li><a class="dropdown-item" href="home-single-store.html">Transparent</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                    <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">404 Not Found</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                        <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog List Layouts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog Grid Layouts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Single Post Layouts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Docs / Components</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="docs/dev-setup.html">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-book"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="components/typography.html">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-server"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Components<span class="badge badge-info ml-2">40+</span></span><small class="d-block text-muted">Faster page building</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="docs/changelog.html">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-edit"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Changelog<span class="badge badge-success ml-2">v1.4</span></span><small class="d-block text-muted">Regular updates</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="mailto:contact@createx.studio">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-help"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Support</span><small class="d-block text-muted">contact@createx.studio</small></div>
                        </div></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
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
              <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><a class="step-item active" href="checkout-shipping.html">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="czi-package"></i>Shipping</div></a><a class="step-item active" href="checkout-payment.html">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="czi-card"></i>Payment</div></a><a class="step-item active current" href="checkout-review.html">
              <div class="step-progress"><span class="step-count">5</span></div>
              <div class="step-label"><i class="czi-check-circle"></i>Review</div></a></div>
          <!-- Order details-->
          <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Review your order</h2>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="img/shop/cart/01.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>White &amp; Blue</div>
                <div class="font-size-lg text-accent pt-2">$154.<small>00</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-right" style="max-width: 9rem;">
              <p class="mb-0"><span class="text-muted font-size-sm">Quantity:</span><span>&nbsp;1</span></p>
              <button class="btn btn-link px-0" type="button"><i class="czi-edit mr-2"></i><span class="font-size-sm">Edit</span></button>
            </div>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="img/shop/cart/02.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>Tommy Hilfiger</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Khaki</div>
                <div class="font-size-lg text-accent pt-2">$79.<small>50</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-right" style="max-width: 9rem;">
              <p class="mb-0"><span class="text-muted font-size-sm">Quantity:</span><span>&nbsp;1</span></p>
              <button class="btn btn-link px-0" type="button"><i class="czi-edit mr-2"></i><span class="font-size-sm">Edit</span></button>
            </div>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="img/shop/cart/03.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>The North Face</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Beige / Dark blue</div>
                <div class="font-size-lg text-accent pt-2">$22.<small>50</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-right" style="max-width: 9rem;">
              <p class="mb-0"><span class="text-muted font-size-sm">Quantity:</span><span>&nbsp;1</span></p>
              <button class="btn btn-link px-0" type="button"><i class="czi-edit mr-2"></i><span class="font-size-sm">Edit</span></button>
            </div>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="img/shop/cart/04.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>42</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Light blue</div>
                <div class="font-size-lg text-accent pt-2">$9.<small>00</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-right" style="max-width: 9rem;">
              <p class="mb-0"><span class="text-muted font-size-sm">Quantity:</span><span>&nbsp;1</span></p>
              <button class="btn btn-link px-0" type="button"><i class="czi-edit mr-2"></i><span class="font-size-sm">Edit</span></button>
            </div>
          </div>
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
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout-payment.html"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Payment</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-complete.html"><span class="d-none d-sm-inline">Complete order</span><span class="d-inline d-sm-none">Complete</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <h2 class="h6 text-center mb-4">Order summary</h2>
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
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout-payment.html"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Payment</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-complete.html"><span class="d-none d-sm-inline">Complete order</span><span class="d-inline d-sm-none">Complete</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="cz-subscribe-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group input-group-overlay flex-nowrap">
                  <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" type="email" name="EMAIL" placeholder="Your email" required>
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="cz-subscribe-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div><small class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
                <div class="subscribe-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="mr-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light pb-4 mb-3">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="img/footer-logo-light.png" alt="Cartzilla"/></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / $
                  </button>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <select class="custom-select custom-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/fr.png" alt="Français"/>Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/de.png" alt="Deutsch"/>Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/it.png" alt="Italiano"/>Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-right mb-4">
              <div class="mb-3"><a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a><a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a></div><img class="d-inline-block" width="187" src="img/cards-alt.png" alt="Payment methods"/>
            </div>
          </div>
          <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>