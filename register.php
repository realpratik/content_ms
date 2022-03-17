<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

    <!-- Page Content -->
    <div class="container">
        
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <main class="form-signin">

                    <form action="output.php" method="post">
                    <center> <img class="mb-4" id="logo" src="images/favicon.png" alt="" width="72" height="80" margin-top="10px"></center>
                        <h1 class="h3 mb-3 fw-normal">Please register <br><br> to start creating a blog</h1> <br>

                        <div class="form-floating">
                          <input type="text" class="form-control"  placeholder="Firstname" name="firstname" 
                          onfocus="if (this.value=='Email') this.value='';">
                    <br>
                        </div>

                        <div class="form-floating">
                          <input type="text" class="form-control"  placeholder="Lastname" name="lastname"
                          onfocus="if (this.value=='Email') this.value='';">
                        <br>
                        </div>

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

                        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Register">
                        
                    </form>
                    <p><a class="login_link" href="login.php">Login</a></bold> if already registered.</p> 
                    <p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                    
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




        