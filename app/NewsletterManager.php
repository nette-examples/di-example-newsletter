<?php

class NewsletterManager
{
	private $mailer;
	private $logger;

	function __construct(Mailer $mailer, Logger $logger)
	{
		$this->mailer = $mailer;
		$this->logger = $logger;
	}

	function distribute(array $recipients)
	{
		$mail = new Mail;
		// ...
		foreach ($recipients as $recipient) {
			$this->mailer->send($mail, $recipient);
		}
		$this->logger->log('...');
	}

}
