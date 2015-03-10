<?php

class SendMailMailer implements Mailer
{

	function send(Mail $mail, $to)
	{
		mail($to, $mail->subject, $mail->message);
	}

}
