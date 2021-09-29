<?php

class NewsletterManager
{
	private Mailer $mailer;
	private Logger $logger;


	public function __construct(Mailer $mailer, Logger $logger)
	{
		$this->mailer = $mailer;
		$this->logger = $logger;
	}


	public function distribute(array $recipients): void
	{
		$mail = new Mail;
		$mail->subject = '...';
		$mail->message = '...';

		foreach ($recipients as $recipient) {
			$this->mailer->send($mail, $recipient);
		}
		$this->logger->log('...');
	}
}
