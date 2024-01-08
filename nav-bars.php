<?php

session_start();
require_once "configuration.php";

$user_name = $_SESSION["lname"]  . " " . $_SESSION["fname"];

// function randomStr($n){

//     $characters = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
//     $str = "";
//     for($i = 0; $i < $n; $i++){
//         $index = rand(0, strlen($characters) - 1);
//         $str .= $characters[$index];
//     }

//     return $str;

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>habitTracker/main</title>
    <link rel="shortcut icon" href="./image/ICONNN.svg" type="image/x-icon" class="icon">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./css/habit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #main .main-aside-container #links .active{
            background-color: #5b77e9;
        }
    </style>
    <script>
        $(window).on('load', function () {
            $('#loading_wrap').fadeOut(2000);
        });
        $(document).ready(function(){
            // $('#main .main-aside-container #links a').click(function(){
            //     $('#main .main-aside-container #links a').removeClass("active");
            //     $(this).addClass("active");
            // });
            var filename = window.location.href.substr(window.location.href.lastIndexOf("/")+1)
            $("#main .main-aside-container #links a[href*="+filename+"]").addClass('active');

        });
    </script>   
</head>
<body  id="main">
<div id='loading_wrap'>
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>
    <header class="main-header main-flex">
        <div class="back-navigation">
            <i class="bi bi-arrow-left" onclick="history.back()"></i>
        </div>
        <div class="hello-message">
            <p>Good Day, <?php echo $user_name; ?></p>
        </div>  
        <div class="main-profile"><a href="./profile.php" class="profile"><i class="bi bi-person-circle"></i></a>
        </div>
    </header>

    
    <aside class="left">
        <div class="main-aside-container">
            <div class="links" id="links">
                <a href="./main.php" class="active"><i class="bi bi-house"></i><span class="remove-on-screen-size-reduce">Home</span></a>
                <a href="#" class><i class="bi bi-check-circle"></i><span class="remove-on-screen-size-reduce">Good Habits</span></a>
                <a href="#"><i class="bi bi-ban"></i><span class="remove-on-screen-size-reduce">Bad Habits</span></a>
                <a href="./add-habit.php" class=""><i class="bi bi-plus-circle"></i><span class="remove-on-screen-size-reduce">Add Habit</span></a>
            </div>
            <div class="bottom links" id="links">
                <a href="./profile.php"><i class="bi bi-people"></i><span class="remove-on-screen-size-reduce">Profile</span></a>
                <a href="./settings.php"><i class="bi bi-sliders2"></i><span class="remove-on-screen-size-reduce">Settings</span></a>
                <a href="./logout.php"><i class="bi bi-box-arrow-left"></i><span class="remove-on-screen-size-reduce">Logout</span></a>
            </div>
        </div>
    </aside>

    <script src="./Js/habit.js"></script>
</body>
</html>