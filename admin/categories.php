
<!-- header -->  
<?php include "includes/admin_header.php" ?>



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


<?php

if(isset($_POST['submit'])){
  $cat_title = $_POST['cat_title'];

  if($cat_title == "" || empty($cat_title)){

    echo "This field should not be empty";

  } else {

    $query = "INSERT INTO categories(cat_title) VALUES ('$cat_title')";

    $query = mysqli_query($connection,$query);

      if(!$query){
        die('QUERY FAILED' . mysqli_error($connection));
        }
  }

}

?>


                      <form action ="" method="post">
                        <div class="form-group">
                          <label class="cat-title"> Add Category</label>
                          <input type="text" name="cat_title" class="form-control">
                        </div>
                        <form action ="">
                        <div class="form-group">
                          <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                        </div>
                      </form>


                      <form action ="" method="post">
                        <div class="form-group">
                          <label class="cat-title"> Add Category</label>
                          <input type="text" name="cat_title" class="form-control">
                        </div>
                        <form action ="">
                        <div class="form-group">
                          <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                        </div>
                      </form>
                    </div>

                    <div class="col-xs-6">

<?php
//$connection = mysqli_connect("localhost","root","root","cms"); if db is not included
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection,$query);
?>


                      <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Category Title</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                                                   
<?php
while($row = mysqli_fetch_assoc($select_categories)){
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];

echo "<tr>";
echo "<td>{$cat_id}</td>";
echo "<td>{$cat_title}</td>";
echo "<tr>";
  }
?>
                           
                          </tbody>
                      </table>
                    </div>
                    
                    <!-- <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> sddfdfdasfad
                        </li>
                    </ol> -->


                </div>
            </div>
            <!-- /.row div -->

        </div>
        <!-- /.container-fluid div -->

    </div>
<!-- /#page-wrapper div -->


<!--footer-->
<?php include "includes/admin_footer.php" ?>   
