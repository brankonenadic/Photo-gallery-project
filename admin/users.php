<?php include("includes/header.php"); ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
      
            <!-- Top Menu Items -->
            <?php include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
        <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Users
            <small>Subheading</small>
        </h1>
   
        <?php 
      
         
           /*  print_r($_SESSION); */

    /*        $user = new User;
           $user->username = "Munjara";
           $user->password = "4321";
           $user->first_name = "Merima";
           $user->last_name = "Sladic";
           $user->create(); */
/* 
           $user = User::find_user_by_id(2);
           $user->username = "Joka";
           $user->update();
 */
         /*    $user = User::find_user_by_id(7);
            $user->delete(); */

     /*        $user = User::find_user_by_id(5);
            $user->username = "Nova Munjara";
            $user->save(); */
/* 
            $user = new User;
            $user->password = "123";
            $user->save();  */

 /*  $user = User::find_user_by_id(6);
  $user->password = "123";
            $user->save(); */
        ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
           
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>