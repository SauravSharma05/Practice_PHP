<?php


include "model.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';


class controller extends model
{
    public function __construct()
    {
        $url = $_SERVER['PATH_INFO'];
        model::__construct();
        switch ($url) {
            
            case "/index":
                
                if (isset($_REQUEST['submit'])) {
                    
                    // print_r($_REQUEST);
                    // exit;
                    $userdata = $this->login();
                }
                include "index.php";
                break;



            case "/otppage":


                if (isset($_REQUEST['sendotp'])) {


                    $mail = new PHPMailer(true);
                    $OTP = rand(1000, 9999);
                    $mail->isSMTP();                            // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                     // Enable SMTP authentication
                    $mail->Username   = 'sauravsharma0512@gmail.com';                     //SMTP username
                    $mail->Password   = '';  // your password 2step varified 
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
                    $mail->setFrom('sauravsharma0512@gmail.com', 'Admin Password Reset');
                    $mail->addAddress($_REQUEST['email']);   // Add a recipient
                    $mail->isHTML(true);  // Set email format to HTML

                    $bodyContent = "<h2>your OTP for password change is : <h2 style = 'color : green;'> $OTP </h2>";
                    $bodyContent .= '<p>to continue with your booking now you can login with your credentials</p>';
                    // $bodyContent .= "login here : <a href='login_saurav.php' target='_blank'>login page redirect</a><br><br>";
                    // $bodyContent .= "<img src='https://media.istockphoto.com/id/692279406/photo/screenplay-film-concept-book-with-film-trips-and-clapperboard-3d-rendering.jpg?s=612x612&w=0&k=20&c=ZERGjKjn6veW1aI1RjBqakPUShWqdVzFeame2mBXkS8=' alt='' height='100px' width='100px'>";
                    // 

                    $mail->Body    = $bodyContent;
                    $mail->Subject = 'OTP for password change';

                    if ($mail->send()) {
                        echo "<script>Alert('email has been sent !!')</script>";
                    } else if (!$mail->send()) {
                        echo 'Message was not sent.';
                        echo 'Mailer error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message has been sent.';
                    }
                    header('location: otppage');
                }
                     
                    
                    if(isset($_REQUEST['verifyotp']))
                    {
                    if($OTP== $_REQUEST['otp'])
                    {
                            header('location: passchange');

                    }
                    else{
                        echo "<script>Alert('OTP not matched')</script>";
                    }
                    }
                    include "otppage.php";
                    break;
                
                case "/forgotpass":
                    
                include "forgotpass.php";
                break;
        }
    }
}


$obj = new controller;
