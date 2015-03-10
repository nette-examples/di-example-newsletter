<?php

interface Mailer
{

	function send(Mail $mail, $to);

}
