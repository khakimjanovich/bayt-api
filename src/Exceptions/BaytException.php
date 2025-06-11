<?php

namespace Khakimjanovich\Bayt\Exceptions;

use Exception;
use Khakimjanovich\Bayt\Enums\ExceptionCodes;
use Throwable;

class BaytException extends Exception
{
    public ExceptionCodes $exceptionCode {
        get {
            return $this->exceptionCode;
        }
    }

    public function __construct(ExceptionCodes $code, ?Throwable $previous = null)
    {
        $this->exceptionCode = $code;
        parent::__construct($code->value, 0, $previous);
    }
}
