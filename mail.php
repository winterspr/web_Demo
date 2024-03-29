
<?php
// Base files 
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/POP3.php';
//require 'PHPMailer/src/OAuth.php';
//require 'PHPMailer/src/DSNConfigurator.php';
//require 'PHPMailer/src/OAuthTokenProvider.php';
// PHPMailer classes into the global namespace
// use PHPMailer\PHPMailer\PHPMailer; 
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\OAuth;
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
// $mail = new PHPMailer(true);                              
// try {
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//     $mail->isSMTP(); // using SMTP protocol                                     
//     $mail->Host = "smtp.gmail.com"; // SMTP host as gmail 
//     $mail->SMTPAuth = true;  // enable smtp authentication                             
//     $mail->Username = "xuandong872003@gmail.com";  // sender gmail host              
//     $mail->Password = "Camchom1@"; // sender gmail host password                          
//     $mail->SMTPSecure = "tls";  // for encrypted connection
//     //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                           
//     $mail->Port = 587;   // port for SMTP     

//     $mail->setFrom('xuandong872003@gmail.com', "Đông"); // sender's email and name
//     $mail->addAddress('nguyenquanganh0303@gmail.com', "quang anh");  // receiver's email and name

//     $mail->Subject = 'Test subject';
//     $mail->Body    = 'Hello';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) { // handle error.
//     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }

?>
<?php
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 require 'PHPMailer/src/POP3.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/DSNConfigurator.php';
require 'PHPMailer/src/OAuthTokenProvider.php';
//PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\OAuthTokenProvider;
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
function sendemail($email, $name, $tiltle, $content){
    $mail = new PHPMailer(true);                              
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); // using SMTP protocol                                     
        $mail->Host = "smtp.gmail.com"; // SMTP host as gmail 
        $mail->SMTPAuth = true;  // enable smtp authentication                             
        $mail->Username = "xuandong872003@gmail.com";  // sender gmail host              
        $mail->Password = "bbeojuqlzcdsemgk"; // sender gmail host password                          
        $mail->SMTPSecure = "tls";  // for encrypted connection
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                           
        $mail->Port = 587;   // port for SMTP     
        $mail->Charset = "UTF-8";
   
        $mail->setFrom('xuandong872003@gmail.com', "Đông"); // sender's email and name
          $mail->addAddress("$email", "$name");  // receiver's email and name
   
        $mail->Subject = "$tiltle";
        $mail->Body    = "$content";
   
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $email) { // handle error.
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;   }
}
    header("location:index.php");
?>
