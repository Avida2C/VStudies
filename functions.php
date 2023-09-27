<?php
require "connection.php";

//the following function will check whether there is any user data in 'USER' session:
function check_login()
{
    if(empty($_SESSION['USER'])) {
        header("Location: login.php");
        die;
    }
}


$pattern ['username']='/^[a-z\d]{5,12}$/i';
$pattern ['email']='/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,4})(\.[a-z]{2,4})?$/';
$pattern ['password']='/^[\w@-]{8,20}$/';

?>


