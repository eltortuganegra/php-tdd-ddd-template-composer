<?php


use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultServiceFactory;
use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultServiceRequestFactory;
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
