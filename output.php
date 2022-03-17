<?php include "includes/db.php"; ?>
<?php include "includes/header.php";?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?> 

<?php

    if($_POST) 
    {
        extract($_POST); //to protect site from XSS Cross Site Scripting
        //validate
        $checkfirstname = preg_match("/^[a-zA-Z]{3,20}$/", $firstname);
        $checklastname = preg_match("/^[a-zA-Z]{3,20}$/", $lastname);
        $checkemail = filter_var($email, FILTER_VALIDATE_EMAIL);

        define("password",$password); //securing password using constant

        if ($checkfirstname && $checklastname && $checkemail && $password){

            //Insert data
            mysqli_query($connection,"INSERT INTO users(firstname,lastname,email,password1) VALUES('$firstname','$lastname','$email','$password')");
            
            echo "<h1><style='color:red;text-align-center'>Registration is successful</h1>";

            //re-direct to login page 
            header("location:login.php");
            
        } else { 
            echo "not valid";
    }   
    }
?>



