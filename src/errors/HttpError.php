<?php

namespace Onfleet\errors;

class HttpError extends \Exception
{
	private  $_name = 'HttpError';

	public function __construct(string $message = "", string $cause = "", int $code = 0, mixed $request = null)
	{
		parent::__construct("[{$this->_name}] {$message} {$cause}.", $code);
	}
}
