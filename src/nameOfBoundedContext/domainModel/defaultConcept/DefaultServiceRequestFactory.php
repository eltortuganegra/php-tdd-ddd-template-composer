<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


use app\nameOfBoundedContext\domainModel\ServiceRequest;

class DefaultServiceRequestFactory
{
    static public function build(string $message): ServiceRequest
    {
        return new DefaultServiceRequest($message);
    }
}