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

<?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

<div class="container d-flex justify-content-center p-5 col-md-8 text-center">
    <div class="row">
        <div class="col">

            <form id="signupForm" class="form-control p-5" style="width:500px;" method="post">
                <?php if(!$showverification) :
                    ?>
                <input type="text" class="w-100 p-1" name="email" placeholder="Enter email" required>

                <button name="verificationCode" class="btn btn-primary w-100 mt-3">Send Verification Code</button>

                <?php else: ?>

                <input type="text" name="verification_code" style="width:400px" class="p-1"
                    placeholder="Enter Verification Code" required>
                <br>
                <input type="password" name="password" style="width:400px" class="mt-2 mb-2 p-1"
                    placeholder="Enter New Password" required>
                <br>
                <button class="w-100 btn btn-primary" name="changepassword">Change Password</button>
                <script src="javascript/validation.js"></script>
                <?php endif; 
                ?>
                <p><?php echo $result2; ?> </p>

            </form>

        </div>
    </div>
</div>

<?php 
    require_once "include/footer.php";?>