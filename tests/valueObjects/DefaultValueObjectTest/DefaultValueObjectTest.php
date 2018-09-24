<?php

use app\valueObjects\defaultValueObject\DefaultValueObject;
use app\valueObjects\defaultValueObject\DefaultValueObjectFactory;
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
