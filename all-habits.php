<?php

require_once "nav-bars.php";
require_once "configuration.php";


$user_id = $_SESSION["user_id"];

// Create a mysql query 
$query = "SELECT * FROM habits WHERE user_id='$user_id'";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

if(empty($row["id"])){
    header("location:home.php");
}


?>

    


<section class="all-habits">
    <div class="all-habits-container">
        <!-- The card will take the full length of the container -->
            <?php
                while($habits = mysqli_fetch_assoc($result)){ ?>
                    <div class="all-habits-card"> 
                        <div class="all-habits-card-container">
                            <div class="tag">
                                <div class="tag-color">
                                </div>
                                <h2><?php echo $habits["tag"]; ?> habit</h2>
                            </div>
                            <h2>Title: <?php echo $habits["title"]; ?></h2>
                            <div class="content">
                                <p><?php echo $habits["content"]; ?></p>
                            </div>
                            <div class="date">
                                <p>Created on: <?php echo $habits["create_date"]; ?></p>
                            </div>
                        </div>
                        <div class="button">
                            <button class="edit" name="edit">Edit</button>
                            <button class="delete" name="delete-1">Delete</button>
                        </div>
                    </div>
                    <?php }; ?>
                </div>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <button class="delete-all" name="delete-all">Delete All</button>
    </form>
</section>