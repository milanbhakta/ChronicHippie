<?php require_once('../../../private/initialize.php');  
include(SHARED_PATH. '/staff_header.php');
include(SHARED_PATH. '/staff_navigation.php');?>
    <!-- Page title-->
    <!-- Page Content-->
    <!-- Dashboard header-->
    <!-- <div class="page-title-overlap bg-accent pt-4">
      <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
        <div class="media media-ie-fix align-items-center pb-3">
          <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="Createx Studio"></div>
          <div class="media-body pl-3">
            <h3 class="text-light font-size-lg mb-0">CHRONIC HIPPIE</h3><span class="d-block text-light font-size-ms opacity-60 py-1"></span>
          </div>
        </div>
        <div class="d-flex">
          <div class="text-sm-right mr-5">
            <div class="text-light font-size-base">Total sales</div>
            <h3 class="text-light">426</h3>
          </div>
          <div class="text-sm-right">
            <div class="text-light font-size-base">Seller rating</div>
            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
            </div>
            <div class="text-light opacity-60 font-size-xs">Based on 98 reviews</div>
          </div>
        </div>
      </div>
    </div> -->
  
         
          <!-- Content-->
          <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
            <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
              <h2 class="h3 py-2 text-center text-sm-left">Settings</h2>
              <!-- Tabs-->
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item"><a class="nav-link px-0 active" href="#profile" data-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="czi-user opacity-60 mr-2"></i>Profile</div>
                    <div class="d-lg-none text-center"><i class="czi-user opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Profile</span></div></a></li>
                <li class="nav-item"><a class="nav-link px-0" href="#notifications" data-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="czi-bell opacity-60 mr-2"></i>Notifications</div>
                    <div class="d-lg-none text-center"><i class="czi-bell opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Notifications</span></div></a></li>
                <!-- <li class="nav-item"><a class="nav-link px-0" href="#payment" data-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="czi-card opacity-60 mr-2"></i>Payment methods</div>
                    <div class="d-lg-none text-center"><i class="czi-card opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Payment</span></div></a></li> -->
              </ul>
              <!-- Tab content-->
              <div class="tab-content">
                <!-- Profile-->
                <div class="tab-pane fade show active" id="profile" role="tabpanel">
                  <div class="bg-secondary rounded-lg p-4 mb-4">
                    <div class="media align-items-center"><img src="img/marketplace/account/avatar.png" width="90" alt="Createx Studio">
                      <div class="media-body pl-3">
                        <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i class="czi-loading mr-2"></i>Change <span class='d-none d-sm-inline'>avatar</span></button>
                        <div class="p mb-0 font-size-ms text-muted">Upload JPG, GIF or PNG image. 300 x 300 required.</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-fn">First Name</label>
                        <input class="form-control" type="text" id="dashboard-fn" value="John">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-ln">Last Name</label>
                        <input class="form-control" type="text" id="dashboard-ln" value="Doe">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-email">Email address</label>
                        <input class="form-control" type="text" id="dashboard-email" value="contact@example.com" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-profile-name">Profile Name</label>
                        <input class="form-control" type="text" id="dashboard-profile-name" value="Createx Studio">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-country">Country</label>
                        <select class="custom-select" id="dashboard-country">
                          <option value>Select country</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Belgium">Belgium</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="Madagascar" selected>Madagascar</option>
                          <option value="Spain">Spain</option>
                          <option value="UK">United Kingdom</option>
                          <option value="USA">USA</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-city">City</label>
                        <input class="form-control" type="text" id="dashboard-city" value="Antananarivo">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-address">Address Line</label>
                        <input class="form-control" type="text" id="dashboard-address" value="Some Cool Street, 22/1">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="dashboard-zip">ZIP Code</label>
                        <input class="form-control" type="text" id="dashboard-zip">
                      </div>
                    </div>
                    <div class="col-12">
                      <hr class="mt-2 mb-3">
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                          <input class="custom-control-input" type="checkbox" id="freelancer" checked>
                          <label class="custom-control-label" for="freelancer">I'm available for freelance</label>
                        </div>
                        <button class="btn btn-primary mt-3 mt-sm-0" type="button">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Notifications-->
                <div class="tab-pane fade" id="notifications" role="tabpanel">
                  <div class="bg-secondary rounded-lg p-4">
                    <div class="custom-control custom-switch">
                      <input class="custom-control-input" type="checkbox" id="nf-disable-all">
                      <label class="custom-control-label font-weight-medium" for="nf-disable-all">Disable all notifications</label>
                    </div>
                  </div>
                  <div class="border-bottom p-4">
                    <div class="custom-control custom-switch">
                      <input class="custom-control-input" type="checkbox" id="nf-product-sold" checked>
                      <label class="custom-control-label" for="nf-product-sold">Product sold notifications</label>
                    </div><small class="form-text text-muted">Send an email when someone purchased one of my products</small>
                  </div>
                  <div class="border-bottom p-4">
                    <div class="custom-control custom-switch">
                      <input class="custom-control-input" type="checkbox" id="nf-product-updated" checked>
                      <label class="custom-control-label" for="nf-product-updated">Product update notifications</label>
                    </div><small class="form-text text-muted">Send an email when a product I've purchased is updated</small>
                  </div>
                  <div class="border-bottom p-4">
                    <div class="custom-control custom-switch">
                      <input class="custom-control-input" type="checkbox" id="nf-product-comment" checked>
                      <label class="custom-control-label" for="nf-product-comment">Product comment notifications</label>
                    </div><small class="form-text text-muted">Send an email when someone comments on one of my products</small>
                  </div>
                  <div class="border-bottom p-4">
                    <div class="custom-control custom-switch">
                      <input class="custom-control-input" type="checkbox" id="nf-product-review" checked>
                      <label class="custom-control-label" for="nf-product-review">Product review notification</label>
                    </div><small class="form-text text-muted">Send an email when someone leaves a review with their rating</small>
                  </div>
                  <div class="border-bottom p-4">
                    <div class="custom-control custom-switch">
                      <input class="custom-control-input" type="checkbox" id="nf-daily-summary">
                      <label class="custom-control-label" for="nf-daily-summary">Daily summary emails</label>
                    </div><small class="form-text text-muted">Send me a daily summary of all products sold, commented or reviewed</small>
                  </div>
                  <div class="text-right mt-4">
                    <button class="btn btn-primary" type="button">Save changes</button>
                  </div>
                </div>
                <!-- Payment methods-->
                <!-- <div class="tab-pane fade" id="payment" role="tabpanel">
                  <div class="bg-secondary rounded-lg p-4 mb-4">
                    <p class="font-size-sm text-muted mb-0">Primary payment method is used by default</p>
                  </div>
                  <div class="table-responsive font-size-md">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>Your credit / debit cards</th>
                          <th>Name on card</th>
                          <th>Expires on</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-3 align-middle">
                            <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                              <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 4999<span class="align-middle badge badge-info ml-2">Primary</span></div>
                            </div>
                          </td>
                          <td class="py-3 align-middle">John doe</td>
                          <td class="py-3 align-middle">08 / 2019</td>
                          <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                              <div class="czi-trash"></div></a></td>
                        </tr>
                        <tr>
                          <td class="py-3 align-middle">
                            <div class="media align-items-center"><img class="mr-2" src="img/card-master.png" width="39" alt="MesterCard">
                              <div class="media-body"><span class="font-weight-medium text-heading mr-1">MasterCard</span>ending in 0015</div>
                            </div>
                          </td>
                          <td class="py-3 align-middle">John doe</td>
                          <td class="py-3 align-middle">11 / 2021</td>
                          <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                              <div class="czi-trash"></div></a></td>
                        </tr>
                        <tr>
                          <td class="py-3 align-middle">
                            <div class="media align-items-center"><img class="mr-2" src="img/card-paypal.png" width="39" alt="PayPal">
                              <div class="media-body"><span class="font-weight-medium text-heading mr-1">PayPal</span>j.doe@example.com</div>
                            </div>
                          </td>
                          <td class="py-3 align-middle">&mdash;</td>
                          <td class="py-3 align-middle">&mdash;</td>
                          <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                              <div class="czi-trash"></div></a></td>
                        </tr>
                        <tr>
                          <td class="py-3 align-middle">
                            <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                              <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 6073</div>
                            </div>
                          </td>
                          <td class="py-3 align-middle">John doe</td>
                          <td class="py-3 align-middle">09 / 2021</td>
                          <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                              <div class="czi-trash"></div></a></td>
                        </tr>
                        <tr>
                          <td class="py-3 align-middle">
                            <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                              <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 9791</div>
                            </div>
                          </td>
                          <td class="py-3 align-middle">John doe</td>
                          <td class="py-3 align-middle">05 / 2021</td>
                          <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                              <div class="czi-trash"></div></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr class="pb-4">
                  <div class="text-sm-right"><a class="btn btn-primary" href="#add-payment" data-toggle="modal">Add payment method</a></div>
                </div> -->
              </div>
            </div>
          </section>
          <?php include(SHARED_PATH. '/staff_footer.php');?>
