<?php

class SendMailMailer implements Mailer
{
	public function send(Mail $mail, string $to): void
	{
		mail($to, $mail->subject, $mail->message);
	}
}
