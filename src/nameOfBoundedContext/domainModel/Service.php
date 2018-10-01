<?php

namespace app\nameOfBoundedContext\domainModel;


interface Service
{
    public function execute(ServiceRequest $serviceRequest): void;
    public function getServiceResponse(): ServiceResponse;
}