<?php

namespace app\services\defaultService;


use app\services\Service;

class DefaultServiceFactory
{
    static public function build(): Service
    {
        return new DefaultService();
    }
}