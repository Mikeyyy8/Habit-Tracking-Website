<?php
require_once "nav-bars.php";
 
    // Unset all of the session variables
    $_SESSION = array();
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to login page
    header("location: habitTracker.php");
    exit;

?>