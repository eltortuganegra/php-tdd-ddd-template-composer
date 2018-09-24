<?php


use app\domainEvents\defaultDomainEvent\DefaultDomainEventFactory;
use app\domainEvents\DomainEvent;
use PHPUnit\Framework\TestCase;

class DefaultDomainEventTest extends TestCase
{
    public function testFactoryShouldReturnAnDefaultDomainEvent()
    {
        // Act
        $defaultDomainEvent = DefaultDomainEventFactory::build();

        // Arrange
        $isADomainEvent = $defaultDomainEvent instanceof DomainEvent;

        // Assert
        $this->assertEquals(true, $isADomainEvent);
    }

}