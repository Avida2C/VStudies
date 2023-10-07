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
            $verification_expire = date('Y-m-d H:i:s', time()+14400); 
    
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

<div class="container col-md-8 my-4">
    <div class="row">
        <div class="col">
            <form class="form-control p-3" method="post">
                <h3>Log In</h3>
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

        <div class="col">
            <form id="signupForm" class="form-control p-3" method="post">
                <h3>Sign Up</h3>
                <label for="username"> Username:</label>
                <br> <input id="signupName" class="formSpacing" type="username" name="username" placeholder="Username">
                <p>Username must be and contain 5 - 12 characters</p>

                <label for="text">Email:</label>
                <br><input id="signupEmail" class="formSpacing" type="email" name="email" placeholder="Email">
                <p>Email must be a valid address, e.g. me@mydomain.com</p>

                <label for="password">Password:&nbsp;</label>
                <br><input id="signupPassword" class="formSpacing" type="password" name="password"
                    placeholder="Password">
                <p>Password must be alphanumeric (symbols such as: -@~`!@#$%^&*()_+={}|\:;"'<,>.? are also allowed) and
                        be 8 - 20 characters
                </p>

                <button class="btn btn-primary mt-3 w-100">Sign Up!</button>
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
</div>

<?php 
    require_once "include/footer.php";?>