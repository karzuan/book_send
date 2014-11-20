<?php

  // File to attach
$my_file = "book.pdf";

// Whe email is going TO
$to_email = $_POST['fieldFormEmail']; // Comes from Wufoo WebHook
//Name who email is going TO
$to_name = $_POST['fieldFormName'];
// Subject line of email
$my_subject = "book delivery";

// Call function to send email
mail_attachment($to_email, $to_name, $my_subject, $my_file );

function mail_attachment($mailto, $nameto, $subject, $filename ) {

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsMail();
$message = "Здравствуйте уважаемый(-ая) $nameto!!!"."\r\n"."Вот Вам посылка! Получите, распишитесь";


$mail->AddAddress("$mailto");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAttachment($filename);
if(!$mail->Send())
    {
        echo "Error sending: " . $mail->ErrorInfo;;
    }
              else
              {
                 echo "Letter sent";
              }
                                                                }

?>