<?php
require "functions.php";
$email = '';
$now = new DateTime();
$result2 = "";
$showverification = false;

if (isset($_POST["changepassword"])) {
    $email = $_SESSION["email"];
    $sql = "SELECT * FROM users WHERE email = '$email'"; // * = means all
    $result  = mysqli_query($con, $sql);
    $user_row = mysqli_fetch_assoc($result);
    $verification_code = $_POST["verification_code"];

    $expireDate = new DateTime($user_row['verification_expire']);
    $showverification = true;
    
    if($verification_code != $user_row['verification_code']) {
        $result2 = "Verification invalid.";
    }
    elseif($now >= $expireDate) {
        $result2 = "Verification code expired.";
    }
    else{
        $password = sha1($_POST['password']);
        $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
        $result  = mysqli_query($con, $sql);
        header("Location: login.php");
    }
}

else if(isset($_POST["verificationCode"])) {
    $email = $_POST["email"];
    $_SESSION["email"] = $email;
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result  = mysqli_query($con, $sql);
    $user_row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 0) {
        $result2 = "Email not found.";
        $showverification = false;
    }
else{
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    $verification_expire = date('Y-m-d H:i:s', time()+14400); 
    Mailer($verification_code, $email, $user_row['username']);
    $sql = "UPDATE users SET verification_code = '$verification_code', verification_expire = '$verification_expire' where email = '$email'";
    $result  = mysqli_query($con, $sql);
    $showverification = true;
}
}  
?>

<body class="bodyStyle">
    <?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="wrapper" style="height: 100%;">
        <div class="pb-5" style="justify-content: center;">
            <form id="signupForm" class="loginStyle py-5" method="post">
            <?php if(!$showverification) :
            ?>
        <input type="text" name="email" placeholder="Enter email" required>

        <button name="verificationCode" class="w-100">Send Verification Code</button>

        <?php else: ?>

        <input type="text" name="verification_code" placeholder="Enter Verification Code" required>

        <input type="password" name="password" placeholder="Enter New Password" required>

        <button class="w-100"  name="changepassword">Change Password</button>
        
        <?php endif; 
        
        ?>
        <p><?php echo $result2; ?> </p>

            </form>

        </div>
    </div>

    <?php 
    require_once "include/footer.php";
    require "include/scripts.php"; ?>

    <script src="Javascript/validation.js"></script>


</body>

</html>
