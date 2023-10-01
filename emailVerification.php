<?php
require "functions.php";
 

$email = $_GET["email"];

$now = new DateTime();


$sql = "SELECT * FROM users WHERE email = '$email'";
$result  = mysqli_query($con, $sql);
$result2 = "";
$user_row = mysqli_fetch_assoc($result);

if (isset($_POST["verify_email"])) {
    $verification_code = $_POST["verification_code"];

    $expireDate = new DateTime($user_row['verification_expire']);

    if($verification_code != $user_row['verification_code']) {
        $result2 = "Verification invalid.";

    }
    elseif($now >= $expireDate) {
        $result2 = "Verification code expired.";
        
    }
    else{

         // mark email as verified
        $sql = "UPDATE users SET verified = true WHERE email = '$email' AND verification_code = '$verification_code'";
        $result  = mysqli_query($con, $sql);
        
        header("Location: login.php");
    }
}
else if(isset($_POST["resend_verification"])) {
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    $verification_expire = date('Y-m-d H:i:s', time()+14400); 
    Mailer($verification_code, $email, $user_row['username']);
    $sql = "UPDATE users SET verification_code = '$verification_code', verification_expire = '$verification_expire' where email = '$email'";
    $result  = mysqli_query($con, $sql);
    
}
?>

<body class="bodyStyle">
    <?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

    <div class="wrapper" style="height: 100%;">
        <div class="pb-5" style="justify-content: center;">
            <form id="signupForm" class="loginStyle py-5" method="post">
                <input type="text" name="verification_code" placeholder="Enter verification code" />

                <button class="w-100 mt-2 mb-4" name="verify_email">Verify Email </button>

                <button class="w-100 mb-4" name="resend_verification">Resend Verification</button>
                <p><?php echo $result2 ?></p>

            </form>

        </div>
    </div>

    <?php 
    require_once "include/footer.php";
    require "include/scripts.php"; ?>

    <script src="Javascript/validation.js"></script>


</body>

</html>