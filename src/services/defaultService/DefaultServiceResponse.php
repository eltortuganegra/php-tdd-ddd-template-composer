<?php

namespace app\services\defaultService;


use app\services\ServiceResponse;

class DefaultServiceResponse implements ServiceResponse
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}