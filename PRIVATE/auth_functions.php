<?php

  // Performs all actions necessary to log in an admin
  function log_in_admin($admin) {
  // Renerating the ID protects the admin from session fixation.
    session_regenerate_id();
    $_SESSION['SBUser'] = $admin;
    global $db;
    $date=date("Y-m-d H:i:s");
    $db->query("UPDATE admin_users SET last_login='$date' WHERE id='$admin'");
    $_SESSION['success_flash']="You are now logged in";
    $_SESSION['last_login'] = $date;
    
    header('Location: /CH4/PUBLIC/staff/index.php');
  }

  // Performs all actions necessary to log out an admin
  function log_out_admin() {
    unset($_SESSION['SBUser']);
    unset($_SESSION['last_login']);
    redirect_to('/CH4/PUBLIC/staff/includes/account-signin.php');
    //unset($_SESSION['username']);
    // session_destroy(); // optional: destroys the whole session
    
  }


  // is_logged_in() contains all the logic for determining if a
  // request should be considered a "logged in" request or not.
  // It is the core of require_login() but it can also be called
  // on its own in other contexts (e.g. display one link if an admin
  // is logged in and display another link if they are not)
  function is_logged_in() {
    // Having a admin_id in the session serves a dual-purpose:
    // - Its presence indicates the admin is logged in.
    // - Its value tells which admin for looking up their record.
    if(isset($_SESSION['SBUser']) && $_SESSION['SBUser']>0){
      return true;
    }
    return false;
  }

  // Call require_login() at the top of any page which needs to
  // require a valid login before granting acccess to the page.
  function require_login() {
    $_SESSION['error_flash']="You must be logged in to access that page";
    redirect_to('/CH4/PUBLIC/staff/includes/account-signin.php');
    
  }
  function permission_error_redirect($url) {
    $_SESSION['error_flash']="You do not have permission to access that page";
    redirect_to($url);
  }

  function has_permission($permission='admin'){
    global $user_data;
    $permissions=explode(',',$user_data['permissions']);
    if(in_array($permission,$permissions,true)){
      return true;
    }
    return false;
    
  }

?>
