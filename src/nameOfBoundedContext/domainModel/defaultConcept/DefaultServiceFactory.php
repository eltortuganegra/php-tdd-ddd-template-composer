<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


use app\nameOfBoundedContext\domainModel\Service;

class DefaultServiceFactory
{
    static public function build(): Service
    {
        return new DefaultService();
    }
}