<?php
require "functions.php";

?>

    <?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="container d-flex justify-content-center p-5 col-md-8 text-center">
        <div class="row">
            <div class="col">
            <h3>Welcome to VStudies</h3>
            <p>Useful notes and tutorials!</p>
            <a href="javascriptNotes.php"><button class="btn btn-primary">Javascript</button></a>
            <a href="regEx.php"><button class="btn btn-primary">RegEx</button></a>
            <a href="phpNotes.php"><button class="btn btn-primary">PHP</button></a>
            <a href="apiNotes.php"><button class="btn btn-primary">API</button></a>
            </div>
        </div>
    </div>


    <?php 
    require_once "include/footer.php";?>

