<?php

namespace app\services\defaultService;


use app\services\Service;
use app\services\ServiceRequest;
use app\services\ServiceResponse;

class DefaultService implements Service
{
    private $serviceRequest;
    private $serviceResponse;

    public function execute(ServiceRequest $serviceRequest): void
    {
        $this->loadServiceRequest($serviceRequest);
        $this->buildServiceResponse();
    }

    private function loadServiceRequest(ServiceRequest $serviceRequest): void
    {
        $this->serviceRequest = $serviceRequest;
    }

    private function buildServiceResponse(): void
    {
        $message = $this->serviceRequest->getMessage();
        $this->serviceResponse = DefaultServiceResponseFactory::build($message);
    }

    public function getServiceResponse(): ServiceResponse
    {
        return $this->serviceResponse;
    }
}