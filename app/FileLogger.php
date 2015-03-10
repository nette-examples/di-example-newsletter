<?php

class FileLogger implements Logger
{
	private $file;

	function __construct($file)
	{
		$this->file = $file;
	}

	function log($message)
	{
		file_put_contents($this->file, $message . "\n", FILE_APPEND);
	}

}
