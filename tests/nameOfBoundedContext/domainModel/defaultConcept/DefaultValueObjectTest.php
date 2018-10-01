<?php

use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultValueObject;
use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultValueObjectFactory;
use PHPUnit\Framework\TestCase;

class DefaultValueObjectTest extends TestCase
{
    public function testItShouldCreateInstanceOfValueObjectWhenWeCreateAnInstanceWithFactory()
    {
        // Arrange
        $valueObject = DefaultValueObjectFactory::build();

        // Act
        $isInstanceOfValueObject = $valueObject instanceof DefaultValueObject;

        // Assert
        $this->assertEquals(true, $isInstanceOfValueObject);
    }
}
