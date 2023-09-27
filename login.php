<?php
require "functions.php";

//check_login();
?>

<body class="bodyStyle">
<?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="wrapper">
        <div class="pb-5" style="justify-content: center;">
            <form class="loginStyle" action="post">
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
