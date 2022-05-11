<?php
session_start();


include("../includes/mydb-functions.php");


if(isset($_POST['uname'],$_POST['upass']))
{
    $name = addslashes($_POST['uname']);
    $pass = addslashes($_POST['upass']);
	$login = $mydb->query("SELECT * FROM admins WHERE admin_name='".$name."' AND admin_password = '".$pass."'"); 

    if($login ==true)
    {
        if( mysqli_num_rows($login)==1) 
        // Checking records for user, if there is a record display 1
        {
                 $_SESSION['auth']=true; 
                 // defining session variable here to use in other pages for login confirmation
            header("location:home.php"); // take user to our home page
        }
        else // there is no such a user exist with this username and password
        {
            header("location:date.php?error"); // redirect user back to login page with error parameter
        }
    }
    else
    {
       header("location:date.php");
    }
}
else
{
    header("location:date.php");
}


?>