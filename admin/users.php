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
    <p style="color: red">
        <?php if($database->connection){
            echo "true";
        }?>
        </p>
        <?php 
      
          /*   $sql = "SELECT * FROM user";
            $result = $database->query($sql);
            $user_faund = mysqli_fetch_array($result);
            var_dump($user_faund); */
         /*  
           $result_set = User::find_all_users();
           while ($rov = mysqli_fetch_array($result_set)) {
            echo $rov['username'] . "</br>";           } 
            $user_id = User::find_user_by_id(1);
            echo $user_id['last_name'] ;  */
            
         
           /*  $users = User::find_all_users();
            foreach ($users as $user) {
                echo $user->last_name . "<br>";
            } */
            $users = User::find_user_by_id(1);
            echo $users->last_name;
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