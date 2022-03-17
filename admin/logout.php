<?php ob_start() ?>
<?php
//fetch session
$email = $_session['mysession'];

//delete the session
session_destroy();

//go to login page
header("location:..\login.php")

?>