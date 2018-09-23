<?php

namespace app\services\defaultService;


use app\services\ServiceRequest;

class DefaultServiceRequest implements ServiceRequest
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}