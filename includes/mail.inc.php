<?php
    $mailto = 'inforomania3@yahoo.com';
    $mailSub = $_POST['subiect'];
    $mailMsg = $_POST['mesaj'];
   require '../PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';e
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "iustin.pericica1@gmail.com";
   $mail ->Password = "mamatata12";
   $mail ->SetFrom("iustin.pericica1@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }


header('Location: ../php/contact.php');


   

