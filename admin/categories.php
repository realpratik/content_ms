
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
                        <small> Author</small>
                    </h1>

                    <div class="col-xs-6">

                      <!-- function from functions.php -->
                      <?php  insert_categories();  ?>

                      <form action ="" method="post">
                        <div class="form-group">
                          <label class="cat-title"> Add Category</label>
                          <input type="text" name="cat_title" class="form-control">
                        </div>
                      
                        <div class="form-group">
                          <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                        </div>
                      </form>  

                      <!-- Update and edit categories -->
                    <?php
                       if(isset($_GET['edit'])){
                        $cat_id = $_GET['edit'];
                        include "includes/update_categories.php";
                       }   
                    ?>

                  </div>

                  <div class="col-xs-6">
                    <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Category Title</th>
                          </tr>
                        </thead>
                        <tbody>    
                        <!-- // FIND ALL CATEGORIES  -->
                            <?php findAllCategories();   ?>   

                           
                        </tbody>
                    </table>
                  </div>               
                </div>
            </div>
            <!-- /.row div -->
        </div>
        <!-- /.container-fluid div -->
    </div>
<!-- /#page-wrapper div -->

<!--footer-->
<?php include "includes/admin_footer.php" ?>