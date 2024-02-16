<?php
require "functions.php";
require_once 'include/header.php';

check_login(); ?>

    <?php
    require_once 'include/navbar.php';?>
   
   <div class="container d-flex justify-content-center p-5 col-md-8">
        <div class="row">
            <div class="col">
            <h3>Admin dashboard</h3>
            <p>Hi <?php echo $_SESSION['USER']['username']?>, Welcome!</p>
            </div>
        </div>
    </div>

    <?php 
    require_once "include/footer.php";?>
