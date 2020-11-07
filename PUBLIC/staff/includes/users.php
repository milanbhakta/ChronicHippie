<?php require_once('../../../private/initialize.php'); 
         if(!is_logged_in()){
                require_login(); 
        }
          if(!has_permission('admin')){
              permission_error_redirect('/CH4/PUBLIC/staff/');           
          }
          include(SHARED_PATH . '/staff_header.php');
          include(SHARED_PATH . '/staff_navigation.php');

       $userQuery=$db->query("SELECT * from admin_users ORDER BY full_name");

       ?>
       <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                            <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
                                    <!-- Basic table -->
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Join Date</th>
                                <th>Last Login</th>
                                <th>Permissions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php while($user=mysqli_fetch_assoc($userQuery)):?>
                            <tr>
                                <th scope="row"><?=$user['id']?></th>
                                <td><?=$user['full_name']?></td>
                                <td><?=$user['email']?></td>
                                <td><?=pretty_date($user['join_date'])?></td>
                                <td><?=pretty_date($user['last_login'])?></td>
                                <td><?=$user['permissions']?></td>
                            </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                        </div>
                                    </div>
        </section>

                   
        <?php 
        include(SHARED_PATH . '/staff_footer.php');
      
?>
