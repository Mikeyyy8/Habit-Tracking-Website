<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HabitTracker</title>
    <link rel="stylesheet" href="./css/habit.css">
    <link rel="shortcut icon" href="./image/ICONNN.svg" type="image/x-icon" class="icon">
    <script src="https://kit.fontawesome.com/645ab696af.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .hidden, .hidden2{
            display: none;
        }
    </style>
    <script>
        $(window).on('load', function(){
            $(".hidden").fadeIn(2000).removeClass("hidden");
            $(".hidden2").fadeIn(6000).removeClass("hidden2");
        });
    </script>
</head>
<body class="hidden">
    <header class="header flex">
        <div class="logo">habit<span class="track">TRACK</span></div>
        <div class="about flex">
            <a href="#" class="info">About us</a>
            <a href="#" class="info">Blog</a>
            <a href="#" class="info">Contact</a>
        </div>
        <nav class="navbar flex">
            <a href="./sign-in.php" class="link">Sign-in</a>
            <a href="./sign-up.php" class="link">Sign-up</a>
            <i class="fa-solid fa-bars"></i>
            <!-- <i class="fa-solid fa-square-xmark" id="close-menu"></i> -->
        </nav>
    </header>

<!-- Hero section -->
    <section class="hero hidden">
        <div class="container flex">
            <div class="text">
                <h2>KEEP TRACK OF YOUR DAILY <span class="track">HABITS</span> </h2>
                <div class="moretext">
                    Take control of your life, track all your daily habits and routines with
                    habitTrack
                </div>
                <div>
                    <a href="./sign-up.php" class="link">Learn more</a>
                </div>
            </div>

            <div class="image">
                <img src="./image/habit.png" alt="habit">
            </div>  
        </div>
    </section>
    <!-- End of hero section -->

    <!-- About section -->
    <section class="about-us hidden2" id="about--">
        <div class="container">
            <div class="about-us-1">
                <div class="about-us-1-text">
                   <h1>DAILY ROUTINE AND PROGRESS <span class="progress">TRACKING <i class="fa-solid fa-chart-simple"></i></span></h1>
                   <div class="">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis!
                   </div>
                     
                </div>
                <div class="image">
                    <img src="./image/gear-.png" alt="">
                </div>  
            </div>

            <div class="about-us-2 hidden2">
                <div class="about-us-2-text">
                    <h1>HELPING WITH ORGANIZATION AND LIFE <span class="routine">BUILDING <i class="fa-solid fa-layer-group"></i></span></h1>
                </div>
                <div class="organize-col">
                    <div class="organize-col-grid">
                        <ul class="organize-col-list-morning">
                            <li class="h"><i class="fa-regular fa-sun"></i>Morning</li>
                            <li class="item">Exercise
                                <div class="caption">
                                    8 AM
                                </div>
                            </li>
                            <li class="item">Meditate
                                <div class="caption">
                                    9 AM
                                </div>
                            </li>
                            <li class="item">Plan
                                <div class="caption">
                                    10 AM
                                </div>
                            </li>
                            <li class="item">Read
                                <div class="caption">
                                    10:30AM
                                </div>
                            </li>
                            <li class="item">Hydrate
                                <div class="caption">
                                    11 AM
                                </div>
                            </li>
                        </ul>
                        <ul class="organize-col-list-noon">
                            <li class="h"><i class="fa-solid fa-cloud"></i>Afternoon</li>
                            <li class="item-a">Lunch
                                <div class="caption">
                                    12 PM
                                </div>
                            </li>
                            <li class="item-a">Work
                                <div class="caption">
                                    12 PM
                                </div>
                            </li>
                            <li class="item-a">Hydrate
                                <div class="caption">
                                    12 PM
                                </div>
                            </li>
                        </ul>
                        <ul class="organize-col-list-evening">
                            <li class="h"><i class="fa-solid fa-moon"></i>Evening</li>
                            <li class="item-b">Dinner
                                <div class="caption">
                                    7:30PM
                                </div>
                            </li>
                            <li class="item-b">Hydrate
                                <div class="caption">
                                    8 PM
                                </div>
                            </li>
                            <li class="item-b">Think
                                <div class="caption">
                                    8:30PM
                                </div>
                            </li>
                            <li class="item-b">Pray
                                <div class="caption">
                                    9 PM
                                </div>
                            </li>
                            <li class="item-b">Sleep
                                <div class="caption">
                                    10 PM
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="about-us-3 hidden2">
                <div class="about-us-3-text">
                    <i class="fa-solid fa-bullseye"></i>
                    <h1>SET GOALS AND BREAK <span class="target">BAD HABITS</span></h1>
                    <div class="target-image">
                        <img src="./image/Personal goals-bro.svg" alt="target">
                    </div>
                </div>
            </div>

            <div class="try hidden2">
                <h1>Try habit<span class="track">TRACK</span> Free</h1>
                <div class="join">
                    <a href="./sign-up.php" class="link">Try habitTRACK Free</a>
                </div>
            </div>
        </div>

    </section>
    <!-- End of about section -->

    <!-- footer  -->
    <footer class="footer">
        <div class="container-all">
            <div class="container">
                <div class="column-1 grid">
                    <a class="footer-heading">Learn More</a>
                    <a href="#" class="learn">Blog</a>
                    <a href="#" class="learn">Contact us</a>
                    <a href="#" class="learn">Reviews</a>
                </div>
    
                <div class="column-2 grid">
                    <a class="footer-heading">Social</a>
                    <a href="#" class="social">Twitter</a>
                    <a href="#" class="social">Facebook</a>
                    <a href="#" class="social">Community</a>
                </div>
    
    
                <div class="column-3 grid">
                    <a class="footer-heading">Resources</a>
                    <a href="#" class="stuff">FAQs</a>
                    <a href="#" class="stuff">How it works</a>
                    <a href="#" class="stuff">Pricing</a>
                </div>
            </div>
    
            <div class="footer-logo">habit<span class="track">TRACK</span></div>
        </div>
    </footer>
    <!-- End of footer  -->
    <!-- <script src="habit.js"></script> -->
</body>
</html>