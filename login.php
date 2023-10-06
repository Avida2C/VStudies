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

<div class="container d-flex justify-content-center p-5 col-md-8">
    <div class="row">
        <div class="col">
            <form class="form-control p-5" style="width:500px;" method="post">
                <h3>Log In</h3>
                <p>Don't have an account? <a href="signup.php" style="text-decoration:none;">Sign Up</a></p>
                <label for="email"> Email</label>
                <br><input class="w-100 formSpacing" type="email" name="email" placeholder="Username">
                <br><label for="password">Password</label>
                <br><input class="w-100 formSpacing" type="password" name="password" placeholder="Password">
                <?php
                if(!empty($error)) {
                    echo '<p style="color:red;">' 
                    . $error . 
                    '</p>';
                }
                ?>
                <br><button class="btn btn-primary w-100">Login</button>
                <p><a style="text-decoration:none;" href="forgotPassword.php">Forgot your password?</a></p>
            </form>
            </div>
    </div>
</div>

    <?php 
    require_once "include/footer.php";?>

