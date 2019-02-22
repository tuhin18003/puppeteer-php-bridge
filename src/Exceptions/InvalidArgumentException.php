<?php

namespace PuppetBridge\Exceptions;

class InvalidArgumentException extends ScreenException
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
