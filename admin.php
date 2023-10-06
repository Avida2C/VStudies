<?php
require "functions.php";

check_login(); ?>

    <?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>
    <div class="wrapper" style="height: 100%;">
        <div id=" ">
            <h3>Admin dashboard</h3>
            <p>Hi <?php echo $_SESSION['USER']['username']?>, Welcome!</p>
        </div>
    </div>

    <?php 
    require_once "include/footer.php";?>
