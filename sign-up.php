<?php

//  
require_once "configuration.php";


// Initialize variables with empty values
$firstName = $lastName = $emailAddress = $password = "";
$nameErr = $emailAddressErr = $passwordErr = $confirmPasswordErr = $signUpErr = "";


// When the form is submitted for processing
if(isset($_POST["sign-up"])){

    // Form validation for name
    if(empty(trim($_POST["first-name"])) || empty(trim($_POST["last-name"]))){
        $nameErr = "Please enter a name";
    }else{
        $firstName = trim($_POST["first-name"]);
        $lastName = trim($_POST["last-name"]);

        $_SESSION["fname"] = $firstName;
        $_SESSION["lname"] = $lastName;
    }

    // Form validation for email
    if(empty(trim($_POST["email"]))){
        $emailAddressErr = "Please enter an email address";
    }elseif(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $emailAddress = trim($_POST["email"]);
        $_SESSION["email"] = $emailAddress;
    }   

    // // Password validation
    if(empty(trim($_POST["password"]))){
        $passwordErr = "Please input a password";
    }elseif(strlen($_POST["password"]) < 6){
        $passwordErr = "Password cannot be less than 6 characters";
    }else{
        $password = trim($_POST["password"]);
    }

    // Confirm password validation
    if(empty(trim($_POST["confirm-password"]))){
        $confirmPasswordErr = "Please confirm your password";
    }elseif(trim($_POST["confirm-password"]) != trim($_POST["password"])){
        $confirmPasswordErr = "Passwords do not match";
    }else{
        $password = trim($_POST["password"]);
    }

    // Rechecking for errors 
    if(empty($nameErr) && empty($emailAddressErr) && empty($passwordErr) && empty($confirmPasswordErr)){

        // Prepare to input values into the database
        $sql = "INSERT INTO users (id, firstName, lastName, emailAddress, userpassword) VALUES ('$id', '$firstName', '$lastName', '$emailAddress', '$password')";
        
        if(mysqli_query($connect, $sql)){                       //Querying the database to see if data has been input into the database
            // echo "Data entered into the database successfully";
            // Redirect to the Success Message page
            header("location: success-page.php");

        }else{
            $signUpErr = "Cannot create account at this time\n try again later";
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
    <link rel="stylesheet" href="./css/reg-page.css">
    <title>sign-up</title>
</head>
<body id="sign-up">

    <!-- Registration -->
    <section class="login">
        <div class="container">
            <div class="card">
                <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="createAccount">
                    <div class="header">
                        <h2>Create Account</h2>
                    </div>
                    <div class="fname">
                        <input type="text" name="first-name" id="first-name" required placeholder="First Name" autofocus >
                    </div>
                    <span class="err"><?php echo $nameErr; ?></span>
                    <div class="lname">
                        <input type="text" name="last-name" id="last-name" required placeholder="Last Name">
                    </div>
                    <span class="err"><?php echo $nameErr; ?></span>
                    <div class="email">
                        <input type="email" name="email" id="email" required placeholder="Email address">
                    </div>
                    <span class="err"><?php echo $emailAddressErr; ?></span>
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <span class="err"><?php echo $passwordErr; ?></span>
                    <div class="confirm-password">
                        <input type="password" name="confirm-password" id="password" placeholder="Confirm password">    
                    </div>
                    <span class="err"><?php echo $confirmPasswordErr; ?></span>
                    <div class="button">
                        <button class="submit" type="submit" name="sign-up" value="Sign up">sign up</button>
                    </div>
                    <p class="link">
                        <a href="./sign-in.php" id="linkCreateAccount">Already have an account?Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
