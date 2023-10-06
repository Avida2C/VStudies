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
$pattern ['password']='/^[-@\w~`!@#$%^&*()_+={}|\:;"\'<,\>.?]{8,20}$/';


/*PHPMailer:
Import PHPMailer classes into the global namespace
These must be at the top of your script, not inside a function */

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
        //Load Composer's autoloader
        require 'vendor/autoload.php';
    
function Mailer($verification_code, $email, $name)
{
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
     
    try {
        //Enable verbose debug output
        $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
    
        //Send using SMTP
        $mail->isSMTP();
    
        //Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';
    
        //Enable SMTP authentication
        $mail->SMTPAuth = true;
    
        //SMTP username
        $mail->Username = 'nadinevid4l@gmail.com';
    
        //SMTP password
        $mail->Password = 'hsqc bveu mkgm yvqi';
    
        //Enable TLS encryption;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    
        //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->Port = 587;
    
        //Recipients
        $mail->setFrom('nadinevid4l@gmail.com', 'VStudies');
    
        //Add a recipient
        $mail->addAddress($email, $name);
    
        //Set email format to HTML
        $mail->isHTML(true);
    
        $mail->Subject = 'Email verification';
        $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
    
        $mail->send();
    }
        
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
