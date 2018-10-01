<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


use app\nameOfBoundedContext\domainModel\ServiceResponse;

class DefaultServiceResponseFactory
{
    static public function build(string $message): ServiceResponse
    {
        return new DefaultServiceResponse($message);
    }
}