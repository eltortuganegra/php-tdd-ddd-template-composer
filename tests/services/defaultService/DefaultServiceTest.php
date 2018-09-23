<?php

use app\services\defaultService\DefaultServiceFactory;
use app\services\defaultService\DefaultServiceRequestFactory;
use PHPUnit\Framework\TestCase;


class DefaultServiceTest extends TestCase
{
    public function testItShouldReturnAResponseServiceWhenWeExecuteDefaultService(): void
    {
        // Arrange
        $message = 'Hello world';
        $serviceRequest = DefaultServiceRequestFactory::build($message);
        $service = DefaultServiceFactory::build();
        $service->execute($serviceRequest);
        $serviceResponse = $service->getServiceResponse();

        // Act
        $outputMessage = $serviceResponse->getMessage();

        // Assert
        $this->assertEquals('Hello world', $outputMessage);
    }
}
