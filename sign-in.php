<?php

require_once "configuration.php";

$email = $password = "";
$emailErr = $passwordErr = $loginErr = "";


if(isset($_POST["sign-in"])){

    // Email validation
    if(empty(trim($_POST["email"]))){
        $emailErr = "Please enter a valid email address";
    }else{
        $email = trim($_POST["email"]);
    }

    // Password validation
    if(empty(trim($_POST["password"]))){
        $passwordErr = "Please enter a valid password";
    }else{
        $password = ($_POST["password"]);
    }

    // Validating credentials
    if(empty($emailErr) && empty($passwordErr)){

        $query = "SELECT * FROM users";
        $result = mysqli_query($connect, $query);

        while($users = mysqli_fetch_assoc($result)){

            if($users['emailAddress'] != $email && $users["userpassword"] != $password){
                $loginErr = "Invalid username and password combination";
            }elseif($users['emailAddress'] == $email && $users["userpassword"] == $password){

                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["fname"] = $users["firstName"];
                $_SESSION["lname"] = $users["lastName"];
                $_SESSION["email"] = $users["emailAddress"];
                $_SESSION["user_id"] = $users["id"];

                header("location: main.php");
            }else{
                $loginErr = "Invalid username and password combination";
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/ICONNN.svg" type="image/x-icon" class="icon">
    <title>sign in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reg-page.css">
</head>
<body id="sign-in">
    <section class="login/signup">
        <div class="container">
            <div class="card">
                <form class="form form--hidden" action="" method="post" id="login">
                    <div class="header">
                        <h2>Sign in</h2>
                    </div>
                    <span class="top-err err"><?php echo $loginErr; ?></span>
                    <div class="email">
                        <input type="email" name="email" id="email" required placeholder="Email address" autofocus>
                    </div>
                    <span class="invalid-feedback"><?php echo $emailErr; ?></span>

                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <span class="invalid-feedback"><?php echo $passwordErr; ?></span>

                    <div class="button">
                        <button class="" name="sign-in" type="submit" value="sign-in">sign in</button>
                    </div>
                    <p class="text">
                        <a href="./forgot-password.php">Forgot password?</a>
                    </p>
                    <p class="link">
                        <a href="./sign-up.php" id="linkLogin">Don't have an account?Sign up</a>
                    </p>
                </form>
            </div>
        </div>
        <a href="./HabitTracker.php" class="back">Back to Homepage</a>
    </section>
</body>
</html>