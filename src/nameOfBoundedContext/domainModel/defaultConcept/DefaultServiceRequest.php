<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


use app\nameOfBoundedContext\domainModel\ServiceRequest;

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