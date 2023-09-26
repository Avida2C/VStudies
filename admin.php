<?php
require "functions.php";

include_once('include/header.php');
include_once('include/navbar.php');
?>

<body class="bodyStyle">
    <div class="wrapper pt-4">
        <div class="w-100">
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
    </div>

    <?php 
    include_once "include/footer.php";
    include "include/scripts.php"; ?>


</body>

</html>