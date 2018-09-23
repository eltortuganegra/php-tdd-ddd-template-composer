<?php

namespace app\services\defaultService;


use app\services\ServiceResponse;

class DefaultServiceResponseFactory
{
    static public function build(string $message): ServiceResponse
    {
        return new DefaultServiceResponse($message);
    }
}