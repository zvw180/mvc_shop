<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "./mvc/core/phpmailer/src/Exception.php";
require_once "./mvc/core/phpmailer/src/PHPMailer.php";
require_once "./mvc/core/phpmailer/src/SMTP.php";

class sendEmail extends controller {

    public mixed $senemail;


    public function __construct()
    {
        $this->senemail = $this->model("sendemail_model");
    }

    public function sendEmailtb($Email,$subject,$message)
    {
        $kq = $this->senemail->sendEmail();
        $kq = json_decode($kq);

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();

            $mail->Host = 'smtp.gmail.com';

            $mail->SMTPAuth = true;

            $mail->Username = $kq[0]->email;

            $mail->Password = $kq[0]->password;

            $mail->SMTPOptions = array(

                'ssl' => array(

                    'verify_peer' => false,

                    'verify_peer_name' => false,

                    'allow_self_signed' => true

                )

            );

            $mail->SMTPSecure = 'tls';

            $mail->Port = 587;



            $mail->setFrom('phamthanhnamdev@gmail.com');



            $mail->addAddress($Email);

            $mail->addReplyTo('phamthanhnamdev@gmail.com');



            $mail->isHTML(true);

            $mail->Subject = $subject;

            $mail->Body = $message;


            $mail->CharSet = 'UTF-8';
            $mail->send();

        }catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}