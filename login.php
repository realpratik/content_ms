<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?> 

<?php
    if($_POST){
        extract($_POST);
        // $email = $_POST(['email']);
        // $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        // define('password1',$password);

        $query = mysqli_query($connection,"SELECT * FROM users WHERE email='$email' and 
         password1='$password'");

        global $connection;

        $count = mysqli_num_rows($query);
        if($count == 0) {
            echo "Invalid login details";
        } else {
            session_start();
            $_SESSION['mysession'] = $email;

            header("location:admin/admin_index.php");
        }
    }

?>

    <!-- Page Content -->
    <div class="container"> 
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <main class="form-signin">
                    <form action="" method="post">
                        <img class="mb-4" id="logo" src="images/favicon.png" alt="" width="72" height="80">
                        <h1 class="h3 mb-3 fw-normal">Login</h1>  <br> 
                        <div class="form-floating">
                        <input type="email" class="form-control"  placeholder="Email" name="email"
                        onfocus="if (this.value=='Email') this.value='';">
                        <br>
                        </div>
                        <div class="form-floating">
                        <input type="password" class="form-control"  placeholder="Password" name="password"
                        onfocus="if (this.value=='Email') this.value='';">
                        <br>
                        </div>          
                        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Sign in"></button>              
                    </form>
                    <p>Not registered, please <a class="login_link" href="register.php">register</a</p> 
                </main>
            </div>
            <!-- Blog Sidebar Widgets Column -->
             <?php
            //  include "includes/sidebar.php";
              ?>           
        </div>
        <!-- /.row -->
        <hr>

<?php include "includes/footer.php";?>

