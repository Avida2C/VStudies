<?php
require "functions.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = htmlspecialchars(addslashes($_POST['username'])); // 'addslashes' allows the user to use brackets
    //$var is the location where the data will be stored, this will be used to store the data onto the db
    $email = htmlspecialchars(addslashes($_POST['email'])); 
    $password = htmlspecialchars(addslashes($_POST['password']));
    $date = date('Y-m-d H:i:s'); //this will take the current date and time 
    //this will gather the data inputted in the form and saved into the databse:
    $query = "insert into users (username, email, password, date) values ('$username', '$email', '$password', '$date')";
    //this will get the data in the form's inputs and save this data into the $var and to the local db
    //$query is created to add data into MySQL 

    $result = mysqli_query($con, $query);
    // (mysql, str)
    //var will determine the outcome gathered from the query var, if this is successful, the details will go into the SQL database
    header("Location: login.php"); //directs the user to different pages
    die; //stops process
}
?>

<body class="bodyStyle">
<?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="wrapper">
        <div class="pb-5" style="justify-content: center;">
            <form class="loginStyle" method="post">
                <h3 class="pb-2">Sign Up</h3>
                <label for="username"> Username</label>
                <input type="username" name="username" placeholder="Username">
                <label for="email"> Email</label>
                <input type="email" name="email" placeholder="Email">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
    </div>

    <?php 
    require_once "include/footer.php";
    require "include/scripts.php"; ?>
</body>

</html>
