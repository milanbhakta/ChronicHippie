<?php 
      require_once('../../private/initialize.php'); 
      include SHARED_PATH.'/header.php';
      include SHARED_PATH.'/navigation.php';
      if(isset($_GET['id'])){
        $cat=$_GET['id'];
    }
    $sql_cat="SELECT product.*,categories.category from product INNER JOIN categories ON product.category_id = categories.id WHERE product.id=$cat ORDER BY product.title
    ";
    $pquery = $db->query($sql_cat);
    $row_count = $pquery->num_rows;
    $product=[];
    if($row_count>0){
      $product=mysqli_fetch_assoc($pquery);
    }
    
?>
    <!-- Page title-->
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href=""><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="includes/categories.php?category=<?=$product['category_id']?>"><?=$product['category']?></a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page"><?=$product['title']?></li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0"><?=$product['title']?></h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container">
      <!-- Gallery + details-->
      <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
        <div class="px-lg-3">
          <div class="row">
            <!-- Product gallery-->
            <div class="col-lg-7 pr-lg-0 pt-lg-4">
              <div class="cz-product-gallery">
                <div class="cz-preview order-sm-2">
                  <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="<?=$product['img_src']?>" data-zoom="<?=$product['img_src']?>" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                
                </div>
                <div class="cz-thumblist order-sm-1">
                  <!-- <a class="cz-thumblist-item active" href="#first">
                    <img src="img/shop/single/gallery/th01.jpg" alt="Product thumb">
                  </a> -->
                 
                   
                  </div>
              </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0">
              <div class="product-details ml-auto pb-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <!-- <a href="#reviews" data-scroll>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                  <button class="btn-wishlist mr-0 mr-lg-n3" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button> -->
                </div>
                <div class="mb-3">
                <?php  $price=explode(".",$product['price'])?>
                  <span class="h3 font-weight-normal text-accent mr-1">$<?=$price[0];?><small>.<?=$price[1];?></small></span>
                  <?php if(!is_null($product['compare_price']) && $product['compare_price']>0):?>
                    
                    
                  <del class="text-muted font-size-lg mr-3"><small><?=$product['compare_price'];?></small></del>
                  <span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                  
                  <?php endif;?>
                  
                </div>
                <hr>
              
                <div class="font-size-sm mb-4">
                  <span class="text-heading font-weight-medium mr-1"></span><span class="text-muted" id=""></span></div>
                <div class="position-relative mr-n4 mb-3">
               
                  <?php if(!is_null($product['1 G']) && $product['1 G']>0):?>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  
                  <label class="custom-option-label" for="s-75"><b>$<?php echo $product['1 G']?></b> per 1g</label>
                </div>
                <?php endif?>
                <?php if(!is_null($product['3.5 G']) && $product['3.5 G']>0) :?>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  
                  <label class="custom-option-label" for="s-75"><b>$<?php echo $product['3.5 G']?></b> per 3.5g</label>
                </div>
                <?php endif?>
                <?php if(!is_null($product['7 G']) && $product['7 G']>0):?>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  
                  <label class="custom-option-label" for="s-75"><b>$<?php echo $product['7 G']?></b> per 7g</label>
                </div>
                <?php endif?>
                <?php if(!is_null($product['14 G'])&& $product['14 G']>0):?>
                <div class="custom-control custom-option custom-control-inline mb-2">
                 
                  <label class="custom-option-label" for="s-75"><b>$<?php echo $product['14 G']?></b> per 14g</label>
                </div>
                <?php endif?>
                <?php if(!is_null($product['28 G'])&& $product['28 G']>0):?>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  
                  <label class="custom-option-label" for="s-75"><b>$<?php echo $product['28 G']?></b> per 28g</label>
                </div>
                <?php endif?>
                <?php if(!is_null($product['1 0z'])&& $product['1 0z']>0):?>
                <div class="custom-control custom-option custom-control-inline mb-2">
                 
                  <label class="custom-option-label" for="s-75"><b>$<?php echo $product['1 0z']?></b> per Oz</label>
                </div>
                <?php endif?>
                <!-- <?php if($product['inventory_quantity']>0):?>
                  <div class="product-badge product-available mt-n-3"><i class="czi-security-check"></i>Product available</div>-->
                  <?php endif;?> 
                  
                  
                </div>
                <form class="mb-grid-gutter" action="add_cart.php" id="add_product_form" method="post">
                  <input type="hidden" name="available" id="available" value=''>
                  <input type="hidden" name="product_id" value='<?=$cat?>'> 
                  <div class="form-group">
                   
                    <?php $available=$product['inventory_quantity'];?>
                    <?php if(!is_null($product['1 G']) && $product['1 G']>0): ?>
                      <!-- <div class="d-flex justify-content-between align-items-center pb-1">
                      <label class="font-weight-medium" for="product-size">Weight:</label>
                    </div> -->
                    <select class="custom-select" required id="product-size" name="product-size">
                      <option value="">Select Weight</option>
                      <?php if(!is_null($product['1 G'])):?>
                      <option value="1 G" data-available="<?=$available?>">1 G (<?=$available?> in stock)</option>
                      <?php endif;?>
                      <?php if(!is_null($product['3.5 G'])):?>
                      <option value="3.5 G" data-available="<?=$available?>">3.5 G</option>
                      <?php endif;?>
                      <?php if(!is_null($product['7 G'])):?>
                      <option value="7 G" data-available="<?=$available?>">7 G</option>
                      <?php endif;?>
                      <?php if(!is_null($product['14 G'])):?>
                      <option value="14 G" data-available="<?=$available?>">14 G</option>
                      <?php endif;?>
                      <?php if(!is_null($product['28 G'])):?>
                      <option value="28 G" data-available="<?=$available?>">28 G</option>
                      <?php endif;?>
                      <?php if(!is_null($product['1 0z'])):?>
                      <option value="1 0z" data-available="<?=$available?>">1 0z</option>
                      <?php endif;?>
                      
                    </select>
                      <?php endif;?>
                  </div>
                  <div class="form-group d-flex align-items-center">
                    
                    <!-- <label    class="font-weight-medium" for="number-input">Quantity</label> -->
                     <input class="form-control" type="number" placeholder="Quantity" value="1" id="quantity" name="quantity" min="1" max=<?=$available?>>
                    
                    
                    
                  </div>

                  <?php if($available==0):?>
                    <div class="form-group d-flex align-items-center">
                  <button class="btn btn-secondary active btn-square btn-block">Sold Out</button>
                  </div>
                  <?php endif;?> 
                  <?php if($available>0):?>
                    <div class="form-group d-flex align-items-center">
                  <button class="btn btn-primary btn-square btn-shadow btn-block" data-toggle="toast" data-target="#cart-toast" onclick="add_to_cart();return false;"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                  </div>
                  <div class="form-group d-flex align-items-center"> 
                  <button class="btn  btn-primary btn-square btn-shadow btn-block active"  onclick="buyitnow()"><i class="czi-cart font-size-lg mr-2"></i>Buy It Now</button>
                  </div>
                  <?php endif;?>  
                    

                  </form>
                  <span id="display"></span>
                
                <!-- Product panels-->
                <div class="accordion mb-4" id="productPanels">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a href="#productInfo" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse show" id="productInfo" data-parent="#productPanels">
                      <div class="card-body">
                       <?=$product['description']?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shippingOptions" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="czi-delivery text-muted lead align-middle mt-n1 mr-2"></i>Shipping options<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="shippingOptions" data-parent="#productPanels">
                      <div class="card-body font-size-sm">
                        <div class="d-flex justify-content-between border-bottom pb-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Courier</div>
                            <div class="font-size-sm text-muted">2 - 4 days</div>
                          </div>
                          <div>$26.50</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local shipping</div>
                            <div class="font-size-sm text-muted">up to one week</div>
                          </div>
                          <div>$10.00</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Flat rate</div>
                            <div class="font-size-sm text-muted">5 - 7 days</div>
                          </div>
                          <div>$33.85</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">UPS ground shipping</div>
                            <div class="font-size-sm text-muted">4 - 6 days</div>
                          </div>
                          <div>$18.00</div>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local pickup from store</div>
                            <div class="font-size-sm text-muted">&mdash;</div>
                          </div>
                          <div>$0.00</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#localStore" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="czi-location text-muted font-size-lg align-middle mt-n1 mr-2"></i>Find in local store<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="localStore" data-parent="#productPanels">
                      <div class="card-body">
                        <select class="custom-select">
                          <option value>Select your country</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Belgium">Belgium</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="Spain">Spain</option>
                          <option value="UK">United Kingdom</option>
                          <option value="USA">USA</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- Sharing-->
                <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6><a class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a class="share-btn sb-instagram mr-2 my-2" href="#"><i class="czi-instagram"></i>Instagram</a><a class="share-btn sb-facebook my-2" href="#"><i class="czi-facebook"></i>Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product description section 1-->
      <!-- <div class="row align-items-center py-md-3">
        <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-lg" src="img/shop/single/prod-img.jpg" alt="Image"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
          <h2 class="h3 mb-4 pb-2">High quality materials</h2>
          <h6 class="font-size-base mb-3">Soft cotton blend</h6>
          <p class="font-size-sm text-muted pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
          <h6 class="font-size-base mb-3">Washing instructions</h6>
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#wash" data-toggle="tab" role="tab"><i class="czi-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#bleach" data-toggle="tab" role="tab"><i class="czi-bleach font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#hand-wash" data-toggle="tab" role="tab"><i class="czi-hand-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#ironing" data-toggle="tab" role="tab"><i class="czi-ironing font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#dry-clean" data-toggle="tab" role="tab"><i class="czi-dry-clean font-size-xl"></i></a></li>
          </ul>
          <div class="tab-content text-muted font-size-sm">
            <div class="tab-pane fade show active" id="wash" role="tabpanel">30° mild machine washing</div>
            <div class="tab-pane fade" id="bleach" role="tabpanel">Do not use any bleach</div>
            <div class="tab-pane fade" id="hand-wash" role="tabpanel">Hand wash normal (30°)</div>
            <div class="tab-pane fade" id="ironing" role="tabpanel">Low temperature ironing</div>
            <div class="tab-pane fade" id="dry-clean" role="tabpanel">Do not dry clean</div>
          </div>
        </div>
      </div>  -->
      <!-- Product description section 2-->
       <!-- <div class="row align-items-center py-4 py-lg-5">
        <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-lg" src="img/shop/single/prod-map.png" alt="Map"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
          <h2 class="h3 mb-4 pb-2">Where is it made?</h2>
          <h6 class="font-size-base mb-3">Apparel Manufacturer, Ltd.</h6>
          <p class="font-size-sm text-muted pb-2">​Sam Tower, 6 Road No 32, Dhaka 1875, Bangladesh</p>
          <div class="d-flex mb-2">
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">3258</h4>
              <p>Workers</p>
            </div>
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">43%</h4>
              <p>Female</p>
            </div>
            <div class="text-center">
              <h4 class="h2 text-accent mb-1">57%</h4>
              <p>Male</p>
            </div>
          </div>
          <h6 class="font-size-base mb-3">Factory information</h6>
          <p class="font-size-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>  -->
    </div>
    <!-- Reviews-->
    <!-- <div class="border-top border-bottom my-lg-3 py-5">
      <div class="container pt-md-2" id="reviews">
        <div class="row pb-3">
          <div class="col-lg-4 col-md-5">
            <h2 class="h3 mb-4">74 Reviews</h2>
            <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star font-size-sm text-muted mr-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
            <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">43</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">16</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">9</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">4</span>
            </div>
            <div class="d-flex align-items-center">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">2</span>
            </div>
          </div>
        </div>
        <hr class="mt-4 pb-4 mb-3">
        <div class="row">
           Reviews list
          <div class="col-md-7">
            <div class="d-flex justify-content-end pb-4">
              <div class="form-inline flex-nowrap">
                <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                <select class="custom-select custom-select-sm" id="sort-reviews">
                  <option>Newest</option>
                  <option>Oldest</option>
                  <option>Popular</option>
                  <option>High rating</option>
                  <option>Low rating</option>
                </select>
              </div>
            </div>
             Review
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Rafael Marquez</h6><span class="font-size-ms text-muted">June 28, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                  <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">15</button>
                <button class="btn-dislike" type="button">3</button>
              </div>
            </div>
             Review
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/02.jpg" alt="Barbara Palson"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Barbara Palson</h6><span class="font-size-ms text-muted">May 17, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                  <div class="font-size-ms text-muted">99% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">34</button>
                <button class="btn-dislike" type="button">1</button>
              </div>
            </div>
             Review
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/03.jpg" alt="Daniel Adams"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Daniel Adams</h6><span class="font-size-ms text-muted">May 8, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                  <div class="font-size-ms text-muted">75% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">26</button>
                <button class="btn-dislike" type="button">9</button>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-outline-accent" type="button"><i class="czi-reload mr-2"></i>Load more reviews</button>
            </div>
          </div>
           Leave review form
          <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
            <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
              <h3 class="h4 pb-2">Write a review</h3>
              <form class="needs-validation" method="post" novalidate>
                <div class="form-group">
                  <label for="review-name">Your name<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" required id="review-name">
                  <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                </div>
                <div class="form-group">
                  <label for="review-email">Your email<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" required id="review-email">
                  <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                </div>
                <div class="form-group">
                  <label for="review-rating">Rating<span class="text-danger">*</span></label>
                  <select class="custom-select" required id="review-rating">
                    <option value="">Choose rating</option>
                    <option value="5">5 stars</option>
                    <option value="4">4 stars</option>
                    <option value="3">3 stars</option>
                    <option value="2">2 stars</option>
                    <option value="1">1 star</option>
                  </select>
                  <div class="invalid-feedback">Please choose rating!</div>
                </div>
                <div class="form-group">
                  <label for="review-text">Review<span class="text-danger">*</span></label>
                  <textarea class="form-control" rows="6" required id="review-text"></textarea>
                  <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                </div>
                <div class="form-group">
                  <label for="review-pros">Pros</label>
                  <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                </div>
                <div class="form-group mb-4">
                  <label for="review-cons">Cons</label>
                  <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                </div>
                <button class="btn btn-primary btn-shadow " type="submit">Submit a Review</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Product carousel (Style with)-->
 
    <!-- Product carousel (You may also like)-->
   
    <!-- Footer-->
    <!-- Footer-->
    <?php include SHARED_PATH.'/footer.php'?>