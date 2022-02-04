<?php
$name = $_POST["student_name"];
$phone = $_POST["phnumber"];
$email = $_POST["email"];
$programme = $_POST["programme"];

date_default_timezone_set('Asia/Kolkata');

$to      = 'amritavidyaedu@gmail.com';
$subject = 'Form Submission for Amrita Ayurveda MDMS Campaign';
//$message = 'Subject: Hello this is an invite for a campaign from Amrita Vishwa Vidyapeetham.<br>';
//$message .= '.............................................................................. <br>';
$message .= 'Submitted on: ' . date("l jS \of F Y h:i:s A") . '<br>';
$message .= 'Name: ' . $name .'<br>';
$message .= 'Phone: ' . $phone .'<br>';
$message .= 'Email: ' . $email .'<br>';
$message .= 'Programme: ' . $programme .'<br>';
//$message .= '.............................................................................. <br>';

    $headers  = "From: " . $name . " via Amrita Vishwa Vidyapeetham <webteam@amrita.ac.in> \r\n" .
                'Reply-To: webteam@amrita.ac.in' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\n" ;
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

//mail($to, $subject, $message, $headers);
//mail($to, $subject, $message,$headers,'-f webteam@amrita.ac.in -F webteam');

if( !mail($to, $subject, $message,$headers,'-f webteam@amrita.ac.in -F webteam') ) {
      echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        // TODO: validate input params, ignore bots...
        header( "Location: thankyou.html" );
    } 

    if( !mail($toResponder, $subjectResponder, $messageResponder ,$headers,'-f webteam@amrita.ac.in -F webteam') ) {
      echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        // TODO: validate input params, ignore bots...
        header( "Location: thankyou.html" );
    } 
?>