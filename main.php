<?php
// Requiring the config and sidebar files 
require_once "configuration.php";
require_once "nav-bars.php";


// Checking if the session variable *loggedin* evaluates to false

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign-in.php");
    exit;
}

// Test code

// Creating a query
$query = "SELECT * FROM habits";

$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

if(empty($row["id"])){
    header("location:home.php");
}else{
    header("location:all-habits.php");
}


?>
    <section class="main-window hidden" id="section">
        <div class="main-window-container">
            <div class="main-image">
                <img src="./image/mountaineer-looking-in-binoculars.svg" alt="mountaineer-looking-in-binoculars.svg">
                <p>"No habits found"</p>
                <div class="add">
                    <a href="./add-habit.php" class="button add-habit"><button>Add Habit</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>