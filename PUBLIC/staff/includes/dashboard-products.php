<?php require_once('../../../private/initialize.php');  

if(!is_logged_in()){
  require_login(); 
}
include(SHARED_PATH. '/staff_header.php');
include(SHARED_PATH. '/staff_navigation.php');
?>


<?php
  $getproducts="SELECT * from product ORDER BY id";
  $dbpath=$tmplocation=$uploadLocation="";
  $prod=$db->query($getproducts);
 
  if(isset($_GET['featured'])){

    $id=(int)$_GET['id'];
    $featured=(int)$_GET['featured'];
    $featuresql="UPDATE PRODUCT set featured ='$featured' WHERE id='$id'";
    $featured=$db->query($featuresql);

    redirect_to('dashboard-products.php');
  }

 
  $title=((isset($_POST['productname']) && $_POST['productname']!='')?sanitize($_POST['productname']):'');
  $category=((isset($_POST['category']) && !empty($_POST['category']))?sanitize($_POST['category']):'');
  $desc=((isset($_POST['description']) && $_POST['description']!='')?sanitize($_POST['description']):'');
  $price=((isset($_POST['price']) && $_POST['price']!='')?sanitize($_POST['price']):'');
  $compare_price=((isset($_POST['compare_price']) && $_POST['compare_price']!='')?sanitize($_POST['compare_price']):'');
  $prod_1G=((isset($_POST['1G']) && $_POST['1G']!='')?sanitize($_POST['1G']):'');
  $prod_3G=((isset($_POST['3G']) && $_POST['3G']!='')?sanitize($_POST['3G']):'');
  $prod_7G=((isset($_POST['7G']) && $_POST['7G']!='')?sanitize($_POST['7G']):'');
  $prod_14G=((isset($_POST['14G']) && $_POST['14G']!='')?sanitize($_POST['14G']):'');
  $prod_28G=((isset($_POST['28G']) && $_POST['28G']!='')?sanitize($_POST['28G']):'');
  $prod_ounce=((isset($_POST['ounce']) && $_POST['ounce']!='')?sanitize($_POST['ounce']):'');
  $inventory=((isset($_POST['inventory_quantity']) && $_POST['inventory_quantity']!='')?sanitize($_POST['inventory_quantity']):'');
 
 

  if(isset($_GET['edit'])){

    
  
    $editid=(int)sanitize($_GET['edit']);

    $getedit = $db->query("SELECT * from product WHERE id='$editid' ");
    $geteditproduct=mysqli_fetch_assoc($getedit);

   
    if(isset($_GET['delete_image'])){
      $image_url=$geteditproduct['img_src'];
      
      unlink($image_url);
      $db->query("UPDATE product SET img_src='' WHERE id='$editid'");
      header('Location: dashboard-products.php?edit='.$editid );
  
  }
    
    $title=((isset($_POST['productname']) && !empty($_POST['productname']))?sanitize($_POST['productname']):$geteditproduct['title']);
    $category=((isset($_POST['category']) && !empty($_POST['category']))?sanitize($_POST['category']):$geteditproduct['category_id']);
    $desc=((isset($_POST['description']) && !empty($_POST['description']))?sanitize($_POST['description']):$geteditproduct['description']);
    $price=((isset($_POST['price']) && !empty($_POST['price']))?sanitize($_POST['price']):$geteditproduct['price']);
    $compare_price=((isset($_POST['compare_price']) && !empty($_POST['compare_price']))?sanitize($_POST['compare_price']):$geteditproduct['compare_price']);
    $prod_1G=((isset($_POST['1G']) && !empty($_POST['1G']))?sanitize($_POST['1G']):$geteditproduct['1 G']);
    $prod_3G=((isset($_POST['3G']) && !empty($_POST['3G']))?sanitize($_POST['3G']):$geteditproduct['3.5 G']);
    $prod_7G=((isset($_POST['7G']) && !empty($_POST['7G']))?sanitize($_POST['7G']):$geteditproduct['7 G']);
    $prod_14G=((isset($_POST['14G']) && !empty($_POST['14G']))?sanitize($_POST['14G']):$geteditproduct['14 G']);
    $prod_28G=((isset($_POST['28G']) && !empty($_POST['28G']))?sanitize($_POST['28G']):$geteditproduct['28 G']);
    $prod_ounce=((isset($_POST['ounce']) && !empty($_POST['ounce']))?sanitize($_POST['ounce']):$geteditproduct['1 0z']);
    $inventory=((isset($_POST['inventory_quantity']) && !empty($_POST['inventory_quantity']))?sanitize($_POST['inventory_quantity']):$geteditproduct['inventory_quantity']);
    $saved_image=(($geteditproduct['img_src']!='')?$geteditproduct['img_src']:'');
    $dbpath=$saved_image;
    if(isset($_POST['edit'])){
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
  
    move_uploaded_file($tmplocation,$uploadLocation); 
    $update="UPDATE PRODUCT SET title='$title',category_id='$category',`description`='$desc',price='$price',compare_price='$compare_price',
    img_src='$dbpath',`1 G`='$prod_1G',`3.5 G`='$prod_3G',`7 G`='$prod_7G',`14 G`='$prod_14G',`28 G`='$prod_28G',`1 0z`='$prod_ounce',inventory_quantity='$inventory' WHERE id='$editid'";
    $db->query($update);
    header('Location: dashboard-products.php');
    }
    
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
                <?php if(isset($_GET['edit'])): ?>

                  <section class="col-lg-7 pt-lg-4 pb-4 mb-3">
                  
                    <!-- Title-->
                    <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                      <?php
                      $getcat ="SELECT * from categories";
                      $cat=$db->query($getcat);


                      ?>
                      <h2 class="h3 py-2 mr-2 text-center text-sm-left">Edit Product</h2>
                      <div class="py-2">
                      <form action="staff/includes/dashboard-products.php?edit=<?=$geteditproduct['id']?>" method="POST" enctype="multipart/form-data">
                  <select class="custom-select mr-2" name="category" id="unp-category" onchange="getproduct();" >
                  
                    <option value="disableall">Select category</option>
                    <?php while($cate=mysqli_fetch_assoc($cat)):?>
                    <option value="<?=$cate['id']?>" <?=(($category==$cate['id'])?'selected':'');?>><?=$cate['category']?></option>
                    <?php endwhile;?>
                    
                  </select>
                 
                </div>
                </div>
             
                <div class="form-group pb-2">
                  <label class="font-weight-medium" for="unp-product-name">Product name</label>
                  <input class="form-control" type="text" value="<?=$title?>" name="productname"   id="unp-product-name"><small class="form-text text-muted">Maximum 100 characters. No HTML or emoji allowed.</small>
                 
                </div>
               
                <div class="cz-file-drop-area form-group">
                <?php if($saved_image!=''):?>
                  <!-- Image gallery -->
                            
                                <!-- <img class="img-thumbnail"   src=""> -->
                               
                                <figure class="figure" style="height:auto;width:200px;">
                                       <img src="<?=$saved_image?>"  class="figure-img" alt="...">
                                       <figcaption class="figure-caption text-center"><?=$title?></figcaption>
                                      
                                </figure>
                                <div>
                                <a href="staff/includes/dashboard-products.php?delete_image=1?&edit=<?=$geteditproduct['id']?>" class="text-danger">Delete Image</a> 
                </div>
                <?php else: ?>
                  <div class="cz-file-drop-icon czi-cloud-upload"></div><span class="cz-file-drop-message">Drag and drop here to upload product screenshot</span>
                 
                  <input class="cz-file-drop-input" type="file" name="image"  >
                  <button class="cz-file-drop-btn btn btn-primary btn-sm mb-2" type="button">Or select file</button><small class="form-text text-muted">1000 x 800px ideal size for hi-res displays</small>
                <?php endif;?>
                </div>
                <div class="form-group py-2">
                  <label class="font-weight-medium" for="unp-product-description">Product description</label>
                  <textarea class="form-control"  name="description"  rows="6" id="unp-product-description"><?=$desc?> </textarea>
                  <div class="bg-secondary p-3 font-size-ms rounded-bottom"><span class="d-inline-block font-weight-medium mr-2 my-1">Markdown supported:</span><em class="d-inline-block border-right pr-2 mr-2 my-1">*Italic*</em><strong class="d-inline-block border-right pr-2 mr-2 my-1">**Bold**</strong><span class="d-inline-block border-right pr-2 mr-2 my-1">- List item</span><span class="d-inline-block border-right pr-2 mr-2 my-1">##Heading##</span><span class="d-inline-block">--- Horizontal rule</span></div>
                </div>
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <label class="font-weight-medium" for="unp-standard-price">Price</label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
                      <input class="form-control" value="<?=$price?>"   name="price" type="text" id="unp-standard-price">
                    </div><small class="form-text text-muted">Average marketplace price for this category is $15.</small>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label class="font-weight-medium" for="unp-extended-price">Compare price</label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
                      <input class="form-control" value="<?=$compare_price?>"    name="compare_price"  type="text" id="unp-extended-price">
                    </div><small class="form-text text-muted">Typically 10x of the Standard license price.</small>
                  </div>
                </div>
                <br/>
                <div class="custom-control custom-switch">
               
                   <input type="checkbox" name="hasprices"   class="custom-control-input" id="customSwitch1" onclick="prices();">
                  <label class="custom-control-label" class="font-weight-medium" for="customSwitch1"><span class="font-weight-medium">This Product has Multiple Prices</span></label>
                </div>
                <br/>
                <div class="table-responsive" id="prices"  >
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
                  </div>--> <input class="form-control" type="text" value="<?=$prod_1G?>"  placeholder="1G" name="1G"></td> 
                  <td>
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>--> <input class="form-control" type="text" value="<?=$prod_3G?>"   placeholder="3.5G" name="3G"></td><td> 
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>  -->
                  <input class="form-control" type="text" value="<?=$prod_7G?>"  placeholder="7G" name="7G"></td><td>
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>-->
                  <input class="form-control" type="text" value="<?=$prod_14G?>"  placeholder="14G" name="14G"></td><td> 
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>-->
                  <input class="form-control" type="text" value="<?=$prod_28G?>" placeholder="28G" name="28G"></td><td> 
                <!-- <div class="input-group mb-3 mr-sm-4">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="czi-dollar"></i></div>
                  </div>  -->
                  <input class="form-control" type="text" value="<?=$prod_ounce?>"  placeholder="1oz" name="ounce"></td>
                    </tr>
                                  </tbody>
                                  </table>
                                  </div>
                                  <br/>
                              <div class="form-group py-2">
                                <label class="font-weight-medium" for="unp-product-quantity">Inventory Quantity</label>
                                <input type="text" class="form-control" value="<?=$inventory?>"   id="unp-product-quantity" name="inventory_quantity"  value='0';>
                              </div>
                            <br/><br/>

                              <button  class="btn btn-success btn-block" name="edit" type="submit"><i class="czi-cloud-upload font-size-lg mr-2"></i>Edit Product</button>
                              <a href="staff/includes/dashboard-products.php"  class="btn btn-primary btn-block">Cancel</a>

               </form>
                                      </div>
                  </section>
                <?php endif;?>
                <?php if(!isset($_GET['edit'])):?>
                  <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                    <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
                      <!-- Title-->
                      <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
                        <h2 class="h3 py-2 mr-2 text-center text-sm-left">Your products<span class="badge badge-secondary font-size-sm text-body align-middle ml-2">5</span></h2>
                        <div class="py-2">
                          <div class="form-inline flex-nowrap pb-3">
                            <label class="text-nowrap mr-2" for="sorting">Sort by:</label>
                            <select class="custom-select custom-select-sm mr-2" id="sorting">
                              <option>Date Purchased</option>
                              <option>Product Name</option>
                              <option>Price</option>
                              <option>Rating</option>
                              <option>Updates</option>
                            </select>
                            <a class="btn btn-outline-secondary btn-sm px-2" type="submit"><i class="czi-arrow-up"></i></a>
                          </div>
                        </div>
                      </div>
                      <!-- Product-->
                      <?php while($products=mysqli_fetch_assoc($prod)):?>
                      <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="staff/includes/dashboard-products.php?edit=<?=$products['id']?>" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th08.jpg" alt="Product"></a>
                        <div class="media-body text-center text-sm-left">
                          <p><?=$products['id']?></p>
                          <h3 class="h6 product-title mb-2"><a href="staff/includes/dashboard-products.php?edit=<?=$products['id']?>"><?=$products['title']?></a></h3>
                          <?php $price=explode(".",$products['price'])?>
                          <div class="d-inline-block text-accent">$<?=$price[0]?><small>.<?=$price[1]?></small></div>
                          <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">26</span></div>
                          <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">$327.<small>60</small></span></div>
                          <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                            
                            <a href="staff/includes/dashboard-products.php?edit=<?=$products['id']?>" class="btn bg-faded-info btn-icon mr-2" type="submit" data-toggle="tooltip"  title="Edit"><i class="czi-edit text-info"></i></a>
                            <a href="staff/includes/dashboard-products.php?delete=<?=$products['id']?>" class="btn bg-faded-danger btn-icon" type="submit" data-toggle="tooltip"  title="Delete"><i class="czi-trash text-danger"></i></a>&nbsp;&nbsp;
                            <a href="staff/includes/dashboard-products.php?featured=<?=(($products['Featured']==0)?'1':'0');?>&id=<?=$products['id'];?>" data-toggle="tooltip"  title="<?=(($products['Featured']==1)?'Remove it':'Make it Trending');?>" class="btn btn-<?=(($products['Featured']==1)?'success':'secondary');?> btn-icon">
                            <i class="czi-<?=(($products['Featured']==1)?' czi-turn-off':' czi-add-circle');?>"></i>
                          <?=$products['Featured']==1?'&nbsp;Trending Product':'';?>
                          </a>
                                          </div>
                        </div>
                      </div>
                      <?php endwhile;?>
                      
                    </div>
                  </section>
                <?php endif;?>
        
    <?php include(SHARED_PATH. '/staff_footer.php');?>