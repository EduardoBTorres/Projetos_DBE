<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Exceptions\ExceptionJsonResponse;
class Controller
{
    protected function errorHandler(string $message, Exception $error,int $statusCode=500)
    {
        throw new ExceptionJsonResponse(
            message:$message,
            previous: $error,
            code: $statusCode,
        );
    }
}
