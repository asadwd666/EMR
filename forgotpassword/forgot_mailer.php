<?php  

require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;  
        $mail->Username = 'nadanpunchi578@gmail.com';
        $mail->Password = 'zainzoya143';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="nadanpunchi578@gmail.com";
        $mail->FromName=$from;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
$result = "<div class='alert alert-danger alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Please try again, an error occured, contact the admin</div>";            
   return $result; 
        }
        else 
        {
           $result = "<div class='alert alert-success alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please Check Your Email Inbox or Spam folder!</div>";
            return $result;
        }
    }
    
    $to   = $email;
    $from = 'nadanpunchi578@gmail.com.com';
    $name = 'khan';
    $subj = 'Reset Password';
    $msg = '
                   Hi,<br><br>
              
              In order to reset your password, please click on the link below:<br><br>
        <a href="http://localhost/mywebsite/resetPassword.php?code='.$code.'"> Reset</a><br><br>
        or copy and paste the link below in a new tab <br><br>
            
              http://localhost/registration/resetPassword.php?code='.$code.' <br><br>

              Asad Regards,<br><br>
              



    ';
    
    $result=smtpmailer($to,$from, $name ,$subj, $msg);
        
  ///https://github.com/iseenlab/PHPMailer/blob/master/mail.php
    //https://github.com/PHPMailer/PHPMailer/tree/5.2-stable

?>
