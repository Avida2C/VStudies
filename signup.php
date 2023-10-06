<?php
require "functions.php";

$isValid = true;
$inputExists = false;
if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $username = htmlspecialchars(addslashes($_POST['username'])); // 'addslashes' allows the user to use brackets
    //$var is the location where the data will be stored, this will be used to store the data onto the db
    if(preg_match($pattern['username'], $username)!= 1) {
        $isValid = false;
    }

    $email = htmlspecialchars(addslashes($_POST['email'])); 
    if(preg_match($pattern['email'], $email)!= 1) {
        $isValid = false;
        
    }
    $password = htmlspecialchars(addslashes($_POST['password']));
    if(preg_match($pattern['password'], $password)!= 1) {
        $isValid = false;
        
    }
    if($isValid) {
        $query = "SELECT * FROM users WHERE username = '$username' || email = '$email'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0) {
            $inputExists = true;
        }    
        else{
            $password = sha1($password);
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
            $verification_expire = date('Y-m-d H:i:s',time()+14400); 
    
            Mailer($verification_code, $email, $name);

            $date = date('Y-m-d H:i:s'); //this will take the current date and time 
            //this will gather the data inputted in the form and saved into the databse:
            $query = "INSERT INTO users (username, email, password, date, verification_code, verification_expire, verified) VALUES ('$username', '$email', '$password', '$date', '$verification_code', '$verification_expire', false )";
            //this will get the data in the form's inputs and save this data into the $var and to the local db
            //$query is created to add data into MySQL 

            $result = mysqli_query($con, $query);
            // (mysql, str)
            //var will determine the outcome gathered from the query var, if this is successful, the details will go into the SQL database
            //directs the user to different pages  
         
            header("Location: emailVerification.php?email=" . $email);
        }
    }
}
?>

    <?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="wrapper" style="height: 100%;" >
        <div class="pb-5" style="justify-content: center;">
            <form id="signupForm" class="loginStyle" method="post">
                <h3 class="pb-2">Sign Up</h3>
                <p>Already a member? <a style="text-decoration:none;" href="login.php">Log In</a></p>

                <label for="username"> Username</label>
                <input id="signupName" type="username" name="username" placeholder="Username">
                <p>Username must be and contain 5 - 12 characters</p>

                <label for="text"> Email</label>
                <input id="signupEmail" type="email" name="email" placeholder="Email">
                <p>Email must be a valid address, e.g. me@mydomain.com</p>

                <label for="password">Password</label>
                <input id="signupPassword" type="password" name="password" placeholder="Password">
                <p>Password must be alphanumeric (symbols such as: -@~`!@#$%^&*()_+={}|\:;"'<,>.? are also allowed) and be 8 - 20 characters
                </p>
                
                <button class="mt-3">Sign Up!</button>
                <?php 
                if(!$isValid) {
                    echo '<p style="color:red">One or more inputs are incorrect! Please try again. </p>';
                }
                if($inputExists) {
                    echo '<p style="color:red">Username or Email already exists! Please try again.</p>';
                }
                ?>

            </form>

        </div>
    </div>

    <?php 
    require_once "include/footer.php";?>
    <script src="Javascript/validation.js"></script>
