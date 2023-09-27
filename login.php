<?php
require "functions.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = htmlspecialchars(addslashes($_POST['email'])); // 'addslashes' allows the user to use brackets
    $password = htmlspecialchars(addslashes($_POST['password']));
    
    $query = "select * from users where email = '$email' && password = '$password' limit 1";
    
    $result = mysqli_query($con, $query);

    // print_r(mysqli_num_rows($result)); this will display the result which includes the results found in the db under num_rows
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); //fetches an array and uses it as an associative array
        //['email' => email] : this is an associative array
        $_SESSION['USER'] = ($row); //Memory location, this saves session's data 


        header("Location: index.php"); //this will direct the user to a different page
        die; //will stop the process
    }
    else
    {
        $error = "Incorrect email or password, try again!";
    }
}
?>

<body class="bodyStyle">
<?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

<?php
    if(!empty($error)) {
        echo '<div class="container" style="margin-left: auto; margin-right: auto;">
        <p style="text-align:center; margin-top:2em; margin-bottom:0px; color:red;">' 
        . $error . 
        '</p></div>';
    }
    ?>

    <div class="wrapper">
        <div class="pb-5" style="justify-content: center;">
            <form class="loginStyle" method="post">
                <h3 class="pb-2">Log In</h3>
                <label for="email"> Email</label>
                <input type="email" name="email" placeholder="Username">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button>Login</button>
            </form>
        </div>
    </div>

    <?php 
    require_once "include/footer.php";
    require "include/scripts.php"; ?>
</body>

</html>
