<?php require_once('../../private/initialize.php'); 
         if(!is_logged_in()){
                require_login(); 
        }
          
          include(SHARED_PATH . '/staff_header.php');
          include(SHARED_PATH . '/staff_navigation.php');

       
       ?>
       <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
       <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
             Welcome to Admin Panel
            </div>
        </section>
        <?php //include 'includes/dashboard-settings.php';
        include(SHARED_PATH . '/staff_footer.php');
   
?>
