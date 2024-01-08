<!-- The settings.php file would return a list of all habits along with a delete
     and an edit button for easy deletion of habits along with other useful functions 
     that i will think about later 
-->
<?php

require_once "nav-bars.php";

?>

<section class="settings">
    <div class="settings-container">
        <div class="card habit-list">
            <h2><i class="bi bi-eyeglasses"></i>All Habits</h2>
            <p>This is a list of all added habits</p>
            <a href="./all-habits.php"><button type="button">View Habits</button></a>
        </div>
        <div class="card credits">
            <h2><i class="bi bi-list"></i>Credits </h2>
            <p>Click the button to view all credits</p>
            <a href="#"><button type="button">View Credits</button></a>
        </div>
        <div class="card donate">
            <h2><i class="bi bi-wallet2"></i>Donate</h2>
            <p>Abeg show your boy small love</p>
            <a href="#"><button type="button">Donate</button></a>   
        </div>
    </div>
</section>