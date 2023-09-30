<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';
$mail = new PHPMailer;                              // Passing `true` enables exceptions

//if (isset($_POST['submit'])) {
    $emailinp = $_POST['email'];
    $subjectinp = "testing";
    $messageinp = $_POST['pesan'];
//}

    //Server settings
	$mail->SMTPDebug = 4; 
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.ankabrata.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@ankabrata.com';                 // SMTP username
    $mail->Password = 'ankabrata123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('noreply@ankabrata.com', 'Anka no reply');
    $mail->addAddress($emailinp); 
    $mail->addReplyTo('noreply@ankabrata.com', 'Not Reply');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subjectinp ;

	$mailContent = '
<h2>Eri</h2>
<p>Eri</p>
<p>Eri</p>';

    $mail->Body    = $mailContent ;

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Error: '. $mail->ErrorInfo;
}else{
	echo 'Message has been sent';
}	

?>