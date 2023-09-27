<?php
require "connection.php";

function check_login()
{
    //the following function will check whether there is any user data in 'USER' session:
    function check_login() 
    {
        if(empty($_SESSION['USER'])) {
            header("Location: login.php");
            die;
        }
    }
}

?>
