<?php 
    require "PHPMailer.php";
    require "SMTP.php";
    require "Exception.php";
    require $_SERVER['DOCUMENT_ROOT']."/includes/StringFormat.php";

    use PHPMailer\PHPMailer\PHPMailer;

    // send_mail("igibek.k@zerek.kz", "Igibek", "");

    function send_mail(string $to, string $name, string $phone, string $comment, string $filepath, string $filename){
        try {
            // echo $to, $name, $filepath, $filename;
            $mail = new PHPMailer(true);
            //server settings
            // $mail->SMTPDebug = 2;
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = SMTP_USER;                 // SMTP username
            $mail->Password = SMTP_PASSWORD;                           // SMTP password
            $mail->SMTPSecure = SMTP_SECURE;                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = SMTP_PORT;  
            $mail->setFrom(SMTP_USER, 'noreply');
            $mail->addAddress(EMAIL_TO, 'Zerek Group');
            $mail->addReplyTo($to, $name);
            $mail->Subject = 'Новый заказ на перевод от ' . $name;
            $mail->Body = sprintf(StringFormat::$email_body, $name, $to, $phone, $comment);
            // Attach the uploaded file
            $mail->addAttachment($filepath, $filename);
            
            if (!$mail->send()) {
                $msg .= "Mailer Error: " . $mail->ErrorInfo;
            } else {
                $msg .= "Message sent!";
                return true;
            }
        } catch(Exception $e){
            echo 'Message could not be sent. Mailer Exception: ', $mail->ErrorInfo;
        } catch(Error $e){
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

        return false;
    }
?>