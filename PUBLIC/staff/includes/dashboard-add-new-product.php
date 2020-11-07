<?php require_once('../../../private/initialize.php');  
  if(!is_logged_in()){
    require_login(); 
}
include(SHARED_PATH. '/staff_header.php');
include(SHARED_PATH. '/staff_navigation.php');
if(isset($_POST['addproduct'])){

   
  //$prod_name=$prod_desc=$prod_price=$prod_compare=$prod_hasprices=$prod_quantity=$prod_1G=$prod_3G=$prod_7G=$prod_14G=$prod_28=$prod_10z=$dbpath="";
  $errorss="";
  if(empty($_POST['productname'])){
    $errorss="<div class='invalid-feedback'>Please input a product name</div>";
  }else{
    $prod_name=sanitize($_POST['productname']);
  }
  if(empty($_POST['description'])){
    $errorss="<div class='invalid-feedback'>Please input a product name</div>";
  }else{
    $prod_desc=sanitize($_POST['description']);
  }
  if(empty($_POST['category'])){
    $errorss="<div class='invalid-feedback'>Please input a product name</div>";
  }else{
    $prod_category=sanitize($_POST['category']);  
  }
  if(empty($_POST['price'])){
    $errorss="<div class='invalid-feedback'>Please input a product name</div>";
  }else{
    $prod_price=sanitize($_POST['price']);
  }
  if(empty($_POST['quantity'])){
    $errorss="<div class='invalid-feedback'>Please input a product name</div>";
    $prod_quantity=(int)sanitize($_POST['quantity']);
  }else{
    $prod_quantity=(int)sanitize($_POST['quantity']);
  }
  if(empty($_POST['compare_price'])){
    $prod_compare='NULL';
  }else{
    $prod_compare=sanitize($_POST['compare_price']);    
  }
  
  
  
  

$prices=array('1 G','3.5 G','7 G','14 G','28 G','1 oz');
  
 
  //check for images
if(!empty($_FILES)){
  
  $photo=$_FILES['image'];
  $name=$photo['name'];
  $nameArray=explode('.',$name);
  $fileName=$nameArray[0];
  $fileExt=$nameArray[1];
  $mime=explode('/',$photo['type']);
  $mimeType=$mime[0];
  $mimeExt=$mime[1];
  $tmplocation=$photo['tmp_name'];
  $fileSize=$photo['size'];
  $allowed=array('png','jpg','jpeg','gif');
  $uploadName=md5(microtime()).'.'.$fileExt;
  $uploadLocation=PUBLIC_PATH.'/img/products/'.$uploadName;
 
  $dbpath='/CH4/PUBLIC/img/products/'.$uploadName;
  if($mimeType!='image'){
    $errors="File Must be an image";
  }
  if(!in_array($fileExt,$allowed)){
    $errors='The Photo Must be a png, jpg, jpeg, gif';
  }
  if($fileSize>15000000){
   $errors="The Files size must be under 15MB"; 
  }
  if($fileExt!=$mimeExt &&($mimeExt=='jpeg' && $fileExt!='jpg')){
    $errors='File Extension does not match file type';
  }
}
  $prices=array('1 G','3.5 G','7 G','14 G','28 G','1 oz');
  // foreach($prices as $price){
  //   if(empty($_POST[$price])){
  //     $prod.$price=
  //   }else{
  //     $prod_1G=sanitize($_POST['1 G']);
  //   $prod_3G=sanitize($_POST['3.5 G']);
  //   $prod_7G=sanitize($_POST['7 G']);
  //   $prod_14G=sanitize($_POST['14 G']);
  //   $prod_28=sanitize($_POST['28 G']);
  //   $prod_10z=sanitize($_POST['1 oz']);

  //   }
  // }
  if(empty($_POST['1G'])){
    $prod_1G=null;
  }else{
    $prod_1G=sanitize($_POST['1G']);    
  } 
  
  if(empty($_POST['3.5G'])){
    $prod_3G=null;
  }else{
    $prod_3G=sanitize($_POST['3.5G']);    
  }
  
  if(empty($_POST['7G'])){
    $prod_7G=null;
  }else{
    $prod_7G=sanitize($_POST['7G']);    
  } 
  
  if(empty($_POST['14G'])){
    $prod_14G=null;
  }else{
    $prod_14G=sanitize($_POST['14G']);    
  } 
  
  if(empty($_POST['28G'])){
    $prod_28=null;
  }else{
    $prod_28=sanitize($_POST['28G']);    
  } 
  
  if(empty($_POST['ounce'])){
    $prod_10z=null;
  }else{
    $prod_10z=sanitize($_POST['ounce']);    
  } 
      
    move_uploaded_file($tmplocation,$uploadLocation);    
    $prodwithprices="INSERT INTO product(`title`,`description`,`category_id`,`price`,`compare_price`, `inventory_quantity`, `img_src`,`1 G`,`3.5 G`,`7 G`, `14 G`,`28 G`,`1 0z`) 
    VALUES ('$prod_name','$prod_desc','$prod_category','$prod_price','$prod_compare','$prod_quantity','$dbpath','$prod_1G','$prod_3G','$prod_7G','$prod_14G','$prod_28','$prod_10z')";
      
    $sqlin=$db->query($prodwithprices);
 
    echo mysqli_error($db);
     //redirect_to('dashboard-add-new-product.php');
    
    
  
    
      
  
  }
 









?>
    <!-- Page title-->
    <!-- Page Content-->
    <!-- Dashboard header-->
    <!-- <div class="page-title-overlap bg-accent pt-4">
      <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
        <div class="media media-ie-fix align-items-center pb-3">
          <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="Createx Studio"></div>
          <div class="media-body pl-3">
            <h3 class="text-light font-size-lg mb-0">Createx Studio</h3><span class="d-block text-light font-size-ms opacity-60 py-1">Member since November 2017</span>
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
              <!-- Title-->
              <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                <?php
                $getcat ="SELECT * from categories";
                $cat=$db->query($getcat);


                ?>
                <h2 class="h3 py-2 mr-2 text-center text-sm-left">Add New Product</h2>
                <div class="py-2">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                  <select class="custom-select mr-2" name="category" id="unp-category" onchange="getproduct();" required>
                  
                    <option value="disableall">Select category</option>
                    <?php while($cate=mysqli_fetch_assoc($cat)):?>
                    <option value="<?=$cate['id']?>"><?=$cate['category']?></option>
                    <?php endwhile;?>
                    
                  </select>
                 
                </div>
                </div>
             
                <div class="form-group pb-2">
                  <label class="font-weight-medium" for="unp-product-name">Product name</label>
                  <input class="form-control" type="text" name="productname" required  id="unp-product-name"  disabled><small class="form-text text-muted">Maximum 100 characters. No HTML or emoji allowed.</small>
                 
                </div>
               
                <div class="cz-file-drop-area form-group">
                  <div class="cz-file-drop-icon czi-cloud-upload"></div><span class="cz-file-drop-message">Drag and drop here to upload product screenshot</span>
                  <input class="cz-file-drop-input" type="file" name="image" disabled required>
                  <button class="cz-file-drop-btn btn btn-primary btn-sm mb-2" type="button">Or select file</button><small class="form-text text-muted">1000 x 800px ideal size for hi-res displays</small>
                </div>
                              <div class="card">
                <div class="card-body">
                <h5 class="card-title">Product description</h5>
              
                                
                                <textarea class="form-control" required name="description" disabled rows="6" id="unp-product-description"></textarea>
                                <div class="bg-secondary p-3 font-size-ms rounded-bottom"><span class="d-inline-block font-weight-medium mr-2 my-1">Markdown supported:</span><em class="d-inline-block border-right pr-2 mr-2 my-1">*Italic*</em><strong class="d-inline-block border-right pr-2 mr-2 my-1">**Bold**</strong><span class="d-inline-block border-right pr-2 mr-2 my-1">- List item</span><span class="d-inline-block border-right pr-2 mr-2 my-1">##Heading##</span><span class="d-inline-block">--- Horizontal rule</span></div>
                              
                            
                </div>
              </div>
              <br/>
              <br/>
              <div class="card">
                <div class="card-body">
                <h5 class="card-title">Pricing</h5>
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <label class="font-weight-medium" for="unp-standard-price">Price</label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
                      <input class="form-control" required disabled name="price" type="text" id="unp-standard-price">
                    </div><small class="form-text text-muted">Average marketplace price for this category is $15.</small>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label class="font-weight-medium" for="unp-extended-price">Compare price</label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
                      <input class="form-control" disabled  name="compare_price"  type="text" id="unp-extended-price">
                    </div><small class="form-text text-muted">Typically 10x of the Standard license price.</small>
                  </div>
                </div>
                <br/>
                <div class="custom-control custom-switch">
               
                   <input type="checkbox" name="hasprices" disabled  class="custom-control-input" id="customSwitch1" onclick="prices();">
                  <label class="custom-control-label" class="font-weight-medium" for="customSwitch1"><span class="font-weight-medium">This Product has Multiple Prices</span></label>
                </div>

               <br/>
                <div class="table-responsive" id="pricess"  style="display: none;">
                <table class="table table-striped">
                  <thead;>
                    <tr>
                      <th>1 G</th>
                      <th>3.5 G</th>
                      <th>7 G</th>
                      <th>14 G</th>
                      <th>28 G</th>
                      <th>1 Oz</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>--> <input class="form-control" type="text"  placeholder="1G" name="1G"></td> 
                  <td>
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>--> <input class="form-control" type="text"  placeholder="3.5G" name="3.5G"></td><td> 
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>  -->
                  <input class="form-control" type="text"  placeholder="7G" name="7G"></td><td>
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>-->
                  <input class="form-control" type="text"  placeholder="14G" name="14G"></td><td> 
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>-->
                  <input class="form-control" type="text" placeholder="28G" name="28G"></td><td> 
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>  -->
                  <input class="form-control" type="text" placeholder="1oz" name="ounce"></td>
                    </tr>
                                  </tbody>
                                  </table>
                                  </div>


                </div>
              </div>
                
                
                
                                  <br/>
                              <div class="form-group py-2">
                                <label class="font-weight-medium" for="unp-product-quantity">Inventory Quantity</label>
                                <input type="text" class="form-control" required id="unp-product-quantity" name="quantity" disabled value='0';>
                              </div>
                            <br/><br/>
                              <button  class="btn btn-primary btn-block" name="addproduct" type="submit"><i class="czi-cloud-upload font-size-lg mr-2"></i>Upload Product</button>
               </form>
                          </div>
          </section>
                     

                                      
    <?php include(SHARED_PATH. '/staff_footer.php');?>