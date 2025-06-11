<?php

namespace Khakimjanovich\Bayt\Enums;

enum ExceptionCodes: string
{
    case CONNECTION_EXCEPTION = 'connection_exception';
    case RESPONSE_IS_NOT_SUCCESSFUL = 'response_is_not_successful';
    case RESPONSE_DOES_NOT_CONTAIN_PROPER_BODY = 'response_doesnt_contain_proper_body';
}
