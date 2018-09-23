<?php

namespace app\services\defaultService;


use app\services\ServiceRequest;

class DefaultServiceRequestFactory
{
    static public function build(string $message): ServiceRequest
    {
        return new DefaultServiceRequest($message);
    }
}