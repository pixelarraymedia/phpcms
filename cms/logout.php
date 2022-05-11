<?php
session_start();

$_SESSION = array(); // clearing session variables up
session_destroy(); // destroy the session

header("location:index.php"); // send user to another page (usually back to login page)

?>