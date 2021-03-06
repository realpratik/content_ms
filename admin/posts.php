<?php ob_start() ?>
<?php
    session_start();
    session_regenerate_id();
    $email = $_SESSION['mysession'];
?>

<!-- header -->  
<?php include "includes/admin_header.php" ?>
 
<!--delete query-->
<?php delete_categories()  ?>

<div id="wrapper">
<!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small> <?php echo $email; ?></small>
                    </h1>

                    <?php

                        if(isset($_GET['source'])){

                          $source = $_GET['source'];

                        } else {
                          $source ='';
                        }

                        switch($source){
                          case 'add_post';
                            include "includes/add_post.php"; 
                            //echo "NICE 34";
                            break;

                          case '100';
                          echo "NICE 100";
                          break;

                          case '200';
                          echo "NICE 200";
                          break;

                          default:

                          include "includes/view_all_posts.php";

                          break;

                        }

                    ?>

                </div>
            </div>
            <!-- /.row div -->
        </div>
        <!-- /.container-fluid div -->
    </div>
<!-- /#page-wrapper div -->

<!--footer-->
<?php include "includes/admin_footer.php" ?>