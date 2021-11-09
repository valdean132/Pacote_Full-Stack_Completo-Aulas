<?php
	
	class Email
	{
	

		public function __construct()
		{
			
			//Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer;

                //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'teste@valdeansouza.com';                     //SMTP username
            $mail->Password   = '1598753';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('teste@valdeansouza.com', 'Valdean');
            $mail->addAddress('valdeanpds@gmail.com', 'Valdean');     //Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML

            $mail->Subject = 'Assunto E-mail';
            $mail->Body    = 'Esse é meu <b>E-mail</b>';
            $mail->AltBody = 'Esse é meu E-mail';

            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: '. $mail->ErrorInfo;
            }else{
                echo 'Message has been sent';
            }
        }

	}
?>