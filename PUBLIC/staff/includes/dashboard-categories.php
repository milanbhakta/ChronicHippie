<?php require_once('../../../private/initialize.php');  
  if(!is_logged_in()){
    require_login(); 
}
include(SHARED_PATH. '/staff_header.php');
include(SHARED_PATH. '/staff_navigation.php');
$sql_getcat="SELECT * from categories  ORDER by id DESC";
      $pquery = $db->query($sql_getcat);
      $row_count = $pquery->num_rows;

      //edit category
      if(isset($_GET['edit']) && !empty($_GET['edit'])){
        $edit_id=(int)$_GET['edit'];
        $edit_id=sanitize($edit_id);

        $editget="SELECT * from categories where id='$edit_id'";
        $edit_result=$db->query($editget);

        $ecategory=mysqli_fetch_assoc($edit_result);

        

      }

      // delete category
      if(isset($_GET['delete']) && !empty($_GET['delete'])){
          $delete_id=(int)$_GET['delete'];
          $delete_id=sanitize($delete_id);
          //delete
          $catdelete="DELETE FROM categories where id='$delete_id'";
          $db->query($catdelete);
          //set autoincrement
          // $setauto="ALTER TABLE categories AUTO_INCREMENT=(SELECT MAX(id) FROM categories)";
          // $db->query($setauto);

          redirect_to('dashboard-categories.php');

      }

      // Add category
      $errors='';
      $success='';
      if(isset($_POST['addcategory'])){
        $category=sanitize($_POST['category']);
        //check if category alreday exist
          $checkcat="SELECT category from categories where category='$category'";
          if(isset($_GET['edit'])){
            $checkcat="SELECT * from categories where category='$category' and id!='$edit_id'";
          }
          $runquery = $db->query($checkcat);
          $row_count1 = $runquery->num_rows;
         
          if($row_count1>0){
           
           
            $errors = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <span class='font-weight-medium'>Category Already Exists!</span> 
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
            
          }
          else{



           $cat="INSERT INTO categories (category) VALUES('$category')";
           if(isset($_GET['edit'])){
           $cat="UPDATE categories set category='$category' WHERE id='$edit_id'";
          }
           $runquery1 = $db->query($cat); 
           
          redirect_to('dashboard-categories.php');
          
         
           }
          

	

		//echo json_encode(array("statusCode"=>201));
	
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
              <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
                <h2 class="h3 py-2 mr-2 text-center text-sm-left">Categories<span class="badge badge-secondary font-size-sm text-body align-middle ml-2"><?=$row_count?></span></h2>
                <div class="py-2">
                  <div class="form-inline flex-nowrap pb-3">
                    <label class="text-nowrap mr-2" for="sorting"><?=((isset($_GET['edit']))?'Edit ':'');?>Category:</label>
                    <form method="post" class="needs-validation" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?><?=((isset($_GET['edit']))?'?edit='.$edit_id:'');?>" novalidate > 
                    <?php
                          $category="";
                          if(isset($_GET['edit'])){
                              $category=$ecategory['category'];
                          }
                          else{
                            if(isset($_POST['category'])){
                              $category=sanitize($_POST['category']);
                            }
                          }
                     ?>

                    <input class="form-control" type="text" name="category" value="<?=$category?>" required>
                    <?php if(isset($_GET['edit'])):?>
                      <a href="staff/includes/dashboard-categories.php"  class="btn btn-outline-primary">Cancel</a>

                    <?php endif?>
                    <input type="submit" class="btn btn-outline-success"  name='addcategory' value="<?=((isset($_GET['edit']))?'Edit':'Add a Category');?>">
                    <div class="invalid-tooltip">You Must Enter a category</div>
                   <?php if(!empty($errors)){
                     echo $errors;
                   } ?>
                    <div class="valid-feedback"><?php if(!empty($success)){
                      echo $success;
                    } ?></div> 
                  </form>
                  </div>
                </div>
              </div>
              <!-- Product-->

                <?php while($parent=mysqli_fetch_assoc($pquery)):?>
              <div class="media d-block d-sm-flex align-items-center py-4 border-bottom">
                <a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th08.jpg" alt="Product"></a>
                <div class="media-body text-center text-sm-left">
                  <h3 class="h6 product-title mb-2"><a href="staff/includes/dashboard-categories.php"><?=$parent['category']?></a></h3>
                  <div class="d-inline-block text-accent">$18.<small>00</small></div>
                  <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">0</span></div>
                  <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">0<small>0</small></span></div>
                  <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                    <!-- <a class="btn bg-faded-accent btn-icon mr-2"  data-toggle="tooltip" title="Download"><i class="czi-download text-accent"></i></a> -->
                    <a class="btn bg-faded-info btn-icon mr-2" href="staff/includes/dashboard-categories.php?edit=<?=$parent['id']?>" data-toggle="tooltip" title="Edit"><i class="czi-edit text-info"></i></a>
                    <a class="btn bg-faded-danger btn-icon" href="staff/includes/dashboard-categories.php?delete=<?=$parent['id']?>" data-toggle="tooltip" title="Delete"><i class="czi-trash text-danger"></i></a>
                  </div>
                </div>
              </div>
                <?php endwhile;?>
            </div>
          </section>
       
    <?php include(SHARED_PATH. '/staff_footer.php');?>