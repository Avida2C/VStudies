<?php
require "functions.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = htmlspecialchars(addslashes($_POST['email'])); // 'addslashes' allows the user to use brackets
    $password = sha1(htmlspecialchars(addslashes($_POST['password'])));
    $query = "SELECT * FROM users WHERE email = '$email' && password = '$password' LIMIT 1";
    $result = mysqli_query($con, $query);

    // print_r(mysqli_num_rows($result)); this will display the result which includes the results found in the db under num_rows
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); //fetches an array and uses it as an associative array
        //['email' => email] : this is an associative array
        
 
        if ($row['verified'] == 0) {
            $error = "Please verify your email <a href='emailVerification.php?email=" . $email . "'>from here</a>";
        }
        else{
            $_SESSION['USER'] = ($row); //Memory location, this saves session's data 
            header("Location: index.php"); //this will direct the user to a different page
        }
    }

    else
    {
        $error = "Incorrect email or password, try again!";
    }
}
?>

    <?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="wrapper" style="height: 100%;">
        <div class="pb-5" style="justify-content: center;">
            <form class="loginStyle" method="post">
                <h3 class="pb-2">Log In</h3>
                <p>Don't have an account? <a href="signup.php" style="text-decoration:none;">Sign Up</a></p>
                <label for="email"> Email</label>
                <input type="email" name="email" placeholder="Username">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <?php
                if(!empty($error)) {
                    echo '<p style="color:red;">' 
                    . $error . 
                    '</p>';
                }
                ?>
                <button>Login</button>
                <p><a style="text-decoration:none;" href="forgotPassword.php">Forgot your password?</a></p>
            </form>
        </div>
    </div>

    <?php 
    require_once "include/footer.php";?>

