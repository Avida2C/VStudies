<?php
require "functions.php";

include_once('include/header.php');
include_once('include/navbar.php');
?>

<body class="bodyStyle">
    <div class="wrapper">
        <div class="indexStyle">
            <h3>Welcome to VStudies</h3>
            <p>Useful notes and tutorials!</p>

            <a href="javascriptNotes.php"><button class="indexStyle">Javascript</button></a>
            <a href="regEx.php"><button class="indexStyle">RegEx</button></a>
            <a href="phpNotes.php"><button class="indexStyle">PHP</button></a>
            <a href="apiNotes.php"><button class="indexStyle">API</button></a>
        </div>
    </div>

    <?php 
    include_once "include/footer.php";
    include "include/scripts.php"; ?>

</body>

</html>