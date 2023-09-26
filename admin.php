<?php
require "functions.php";
require_once 'include/header.php';
require_once 'include/navbar.php';
?>

<body class="bodyStyle">
    <div class="wrapper">
        <div class="pb-5" style="justify-content: center;">
            <form class="loginStyle" action="post">
                <h3 class="pb-2">Admin Login</h3>
                <label for="username"> Username</label>
                <input type="username" name="username" placeholder="Username">
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
