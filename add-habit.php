<?php
require_once "nav-bars.php";
require_once "configuration.php";

// Form Variables

$good = "good";
$bad = "bad";

$habit_type = $habit_name = $message = $success = "";
$name_error = $habit_error = $message_error = $failure = "";
$user_id = $_SESSION["user_id"];

if(isset($_POST["submit"])){

    $message = $_POST["self-message"];
    
    // Regular form validation

    if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["habit-name"])){
        $name_error = "No special characters allowed";
    }elseif(empty($_POST["habit-name"])){
        $name_error = "This field is required";
    }else{
        $habit_name = $_POST["habit-name"];
    }

    if(strtolower($_POST["habit-type"]) == $good || strtolower($_POST["habit-type"]) == $bad){
        $habit_type = trim($_POST["habit-type"]);
    }elseif(empty($_POST["habit-type"])){
        $habit_error = "This is a required field";
    }else{
        $habit_error = "Please select either good or bad";
    }


    $query = "INSERT INTO habits (title, tag, content, user_id) VALUES ('$habit_name', '$habit_type', '$message', '$user_id')";
    
    if(empty($name_error) && empty($habit_error) && empty($message_error)){

        if(mysqli_query($connect, $query)){
            
            $_SESSION["habit-name"] = $habit_name;
            $_SESSION["habit-type"] = $habit_type;
            $_SESSION["message"] = $message;
            $_SESSION["create-date"] = date("Y-m-d H:i:s");

            
            $success = "You have added a new habit to your list";
            header("Refresh: 3;url=main.php");

        }else{
            $failure = "Please try again later";
        }
    }

    mysqli_close($connect);

}


?>

<section class="main-window">
        <div class="main-window-container">
            <div class="card">
                <form class="form create-habit" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <h2>Add Habit</h2>
                        <span class="success" style="color: green;"><?php echo $success; ?></span>
                        <span class="failure" style="color: red;"><?php echo $failure; ?></span>
                        <!-- <div class="type">

                        </div> -->
                        <div class="tag">
                            <input type="text" name="habit-type" id="habit-type" class="habit-type" placeholder="Good or Bad Habit" required>
                        </div>
                        <span class="err"><?php echo $habit_error; ?></span>

                        <div class="name">
                            <input type="text" name="habit-name" id="habit-name" placeholder="Habit name" required>
                        </div>
                        <span class="err"><?php echo $name_error; ?></span>
                        
                        <div class="message">
                            <input type="text" name="self-message" id="self-message" placeholder="Leave yourself a message">
                        </div>
                        <span class="err"><?php echo $message_error; ?></span>

                        <button class="submit" name="submit">Add habit</button>
                </form>
            </div>
        </div>
    </section>