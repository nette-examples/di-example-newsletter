<?php

class FileLogger implements Logger
{
	private string $file;


	public function __construct(string $file)
	{
		$this->file = $file;
	}


	public function log(string $message): void
	{
		file_put_contents($this->file, $message . "\n", FILE_APPEND);
	}
}
