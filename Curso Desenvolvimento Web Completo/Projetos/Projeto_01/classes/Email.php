<?php
	
	class Email
	{
        
        private $mailer;

		public function __construct($host, $username, $password, $name)
		{
			
			//Create an instance; passing `true` enables exceptions
            $this->mailer = new PHPMailer;
                //Enable verbose debug output
            $this->mailer->isSMTP();                                            //Send using SMTP
            $this->mailer->Host       = $host;                     //Set the SMTP server to send through
            $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mailer->Username   = $username;                     //SMTP username
            $this->mailer->Password   = $password;                               //SMTP password
            $this->mailer->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $this->mailer->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mailer->setFrom($username, $name);

            //Content
            $this->mailer->isHTML(true);

            // CharSet
            $this->mailer->CharSet = 'UTF-8';

            
        }

        public function addAdress($email, $nome){
            $this->mailer->addAddress($email, $nome);     //Add a recipient
        }

        public function formatarEmail($info){
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }

        public function enviarEmail(){
            if($this->mailer->send()){
                return true;
            }else{
                return false;
            }
        }

	}
?>