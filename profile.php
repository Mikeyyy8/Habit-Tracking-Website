<?php

require_once "nav-bars.php";

// On submit button clicked 
if(isset($_POST["save"])){

// Update the name and image in the database 


}

?>

<section class="main-window">
        <div class="main-window-container">
            <div class="card">
                <form class="form profile" enctype="multipart/form-data">
                        <h2>Profile</h2>
                        <div class="image">
                            <i class="bi bi-person-circle"></i>
                            <p><input type="file" name="profile" class="form-control" id="profile-photo"></p>
                        </div>
                        <input type="text" name="first_name" id="first_name" placeholder="<?php echo $_SESSION["fname"]; ?>" disabled>
                        <input type="text" name="last_name" id="last_name" placeholder="<?php echo $_SESSION["lname"]; ?>" disabled>
                        <input type="text" name="email" id="email" placeholder="<?php echo $_SESSION["email"]; ?>" disabled>
                        <button class="submit" name="edit">Edit</button>
                        <button class="submit" name="save">Save</button>
                </form>
            </div>
        </div>
    </section>