<?php

$connect = mysqli_connect("localhost", "root", "", "habittracker");

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

?>