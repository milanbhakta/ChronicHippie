<?php
require_once('../../../private/initialize.php');  
if(!is_logged_in()){
    require_login();
}
include(SHARED_PATH. '/staff_header.php');

$hashed=$user_data['password'];
$email=((isset($_POST['email']))?sanitize($_POST['email']):'');
$email=trim($email);
//old password
$oldpassword=((isset($_POST['oldpassword']))?sanitize($_POST['oldpassword']):'');
$oldpassword=trim($oldpassword);
//actual password
$password=((isset($_POST['password']))?sanitize($_POST['password']):'');
$password=trim($password);
//confirm password
$confirmpassword=((isset($_POST['confirmpassword']))?sanitize($_POST['confirmpassword']):'');
$confirmpassword=trim($confirmpassword);

$newhashed=password_hash($confirmpassword,PASSWORD_DEFAULT);
$userid=$user_data['id'];
$errors;
?>
  
    <!-- Page title-->
    <!-- Page Content-->
   <div class="bo">
   
    <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
   
        <div class="col-md-8">
          <div class="card border-0 box-shadow">
            <div class="card-body">
              <h2 class="h4 mb-1">Change Password</h2>
              <!-- <div class="py-3">
                <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">With social account:</h3>
                <div class="d-inline-block align-middle"><a class="social-btn sb-google mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Google"><i class="czi-google"></i></a><a class="social-btn sb-facebook mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Facebook"><i class="czi-facebook"></i></a><a class="social-btn sb-twitter mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Twitter"><i class="czi-twitter"></i></a></div>
              </div>
             
              <h3 class="font-size-base pt-4 pb-2">Or using form below</h3> -->
              <hr>
              <div>
                <?php
                
                if(isset($_POST['change'])){
                  
                  
                  
                    //ifnew match confirms


                  if(strlen($password)<6){
                    echo '<br><div class="alert alert-primary alert-with-icon" role="alert">
                    <div class="alert-icon-box">
                      <i class="alert-icon czi-bell"></i>
                    </div>
                   Password must be atleast six Characters.
                     </div>';
                   }
                     if($password!=!$confirmpassword){
                    echo '<br><div class="alert alert-primary alert-with-icon" role="alert">
                    <div class="alert-icon-box">
                      <i class="alert-icon czi-bell"></i>
                    </div>
                   The New and Confirm Password doesn\'t match. Please try again.
                     </div>';
                   }

               if(!password_verify($oldpassword,$hashed)){
                    echo '<br><div class="alert alert-primary alert-with-icon" role="alert">
                    <div class="alert-icon-box">
                      <i class="alert-icon czi-bell"></i>
                    </div>
                   Your Old password doesn\'t match. 
                     </div>';
                  }
                 
                  
                $db->query("UPDATE admin_users SET password='$newhashed' WHERE id='$userid'");
                $_SESSION['success_flash']='Your password has been changed.';
                header('Location: /CH4/PUBLIC/staff/index.php');
                
                  
                }
                
                ?>
              </div>
              <br>
              <form class="needs-validation" name='change' action="staff/includes/account-changepassword.php" method="post" novalidate>
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-key"></i></span></div>
                  <div class="password-toggle">
                  <input class="form-control prepended-form-control" name='oldpassword'  type="password" placeholder="Old Password" value="<?=$oldpassword?>" required>
                  <label class="password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                    </div>
                </div>
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-locked"></i></span></div>
                  <div class="password-toggle">
                    <input class="form-control prepended-form-control" name='password' value="<?=$password?>" type="password" placeholder="New Password" required>
                    <label class="password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-locked"></i></span></div>
                  <div class="password-toggle">
                    <input class="form-control prepended-form-control" name='confirmpassword' value="<?=$confirmpassword?>" type="password" placeholder="Confirm New Password" required>
                    <label class="password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
                
                <hr class="mt-4">
                <div class="text-right pt-4">
                    <a href="staff/" class="btn btn-primary">Cancel</a>
                  <button class="btn btn-success" name='change' type="submit"><i class="czi-sign-in mr-2 ml-n21"></i>Change Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
              </div>
      
    </div>
</div>
    <!-- Footer-->
    <!-- Footer-->
    <?php include(SHARED_PATH. '/staff_footer.php');?>