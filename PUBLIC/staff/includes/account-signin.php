<?php
require_once('../../../private/initialize.php');  
include(SHARED_PATH. '/staff_header.php');

$email=((isset($_POST['email']))?sanitize($_POST['email']):'');
$email=trim($email);
$password=((isset($_POST['password']))?sanitize($_POST['password']):'');
$password=trim($password);

$hashed=password_hash($password,PASSWORD_DEFAULT);
$errors;
?>
  
    <!-- Page title-->
    <!-- Page Content-->
   <div class="bo">
   
    <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
    <img class="navbar-brand d-none d-sm-block mr-4 order-lg-1"  height="auto" width="300" src="img/Logo.jpeg" alt="Chronic Hippie"/>
        <div class="col-md-8">
          <div class="card border-0 box-shadow">
            <div class="card-body">
              <h2 class="h4 mb-1">Sign in</h2>
              <!-- <div class="py-3">
                <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">With social account:</h3>
                <div class="d-inline-block align-middle"><a class="social-btn sb-google mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Google"><i class="czi-google"></i></a><a class="social-btn sb-facebook mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Facebook"><i class="czi-facebook"></i></a><a class="social-btn sb-twitter mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Twitter"><i class="czi-twitter"></i></a></div>
              </div>
             
              <h3 class="font-size-base pt-4 pb-2">Or using form below</h3> -->
              <hr>
              <div>
                <?php
                
                if(isset($_POST['login'])){
                  
                  
                  
                  //check if email exists
                  $query=$db->query("SELECT * from admin_users WHERE email='$email'");
                  $user=mysqli_fetch_assoc($query);
                  $userCount=mysqli_num_rows($query);
                  

                  if($userCount<1){
                    
                   echo '<br><div class="alert alert-primary alert-with-icon" role="alert">
                   <div class="alert-icon-box">
                     <i class="alert-icon czi-bell"></i>
                   </div>
                   That Email doesn\'t exists.
                    </div>';

                  }else if(!password_verify($password,$user['password'])){
                    echo '<br><div class="alert alert-primary alert-with-icon" role="alert">
                    <div class="alert-icon-box">
                      <i class="alert-icon czi-bell"></i>
                    </div>
                   Password doesn\'t match. Please try again.
                     </div>';
                  }else{
                    $user_id=$user['id'];
                    log_in_admin($user_id);
                  }
                  
                  
                //   if(strlen($password)<6){
                //   echo '<br><div class="alert alert-primary alert-with-icon" role="alert">
                //   <div class="alert-icon-box">
                //     <i class="alert-icon czi-bell"></i>
                //   </div>
                //  Password must be atleast six Characters.
                //    </div>';
                //  }
                
                  
                }
                
                ?>
              </div>
              <br>
              <form class="needs-validation" name='login' action="staff/includes/account-signin.php" method="post" novalidate>
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" name='email' type="email" placeholder="Email" value="<?=$email?>" required>
                </div>
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-locked"></i></span></div>
                  <div class="password-toggle">
                    <input class="form-control prepended-form-control" name='password' value="<?=$password?>" type="password" placeholder="Password" required>
                    <label class="password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" checked id="remember_me">
                    <label class="custom-control-label" for="remember_me">Remember me</label>
                  </div><a class="nav-link-inline font-size-sm" href="account-password-recovery.html">Forgot password?</a>
                </div>
                <hr class="mt-4">
                <div class="text-right pt-4">
                  <button class="btn btn-primary" name='login' type="submit"><i class="czi-sign-in mr-2 ml-n21"></i>Sign In</button>
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