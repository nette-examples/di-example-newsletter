<?php

interface Mailer
{
	function send(Mail $mail, string $to): void;
}
