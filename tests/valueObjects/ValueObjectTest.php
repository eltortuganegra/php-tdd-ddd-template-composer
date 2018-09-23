<?php

use app\valueObjects\ValueObject;
use app\valueObjects\ValueObjectFactory;
use PHPUnit\Framework\TestCase;


class ValueObjectTest extends TestCase
{
    public function testItShouldCreateInstanceOfValueObjectWhenWeCreateAnInstanceWithFactory()
    {
        // Arrange
        $valueObject = ValueObjectFactory::build();

        // Act
        $isInstanceOfValueObject = $valueObject instanceof ValueObject;

        // Assert
        $this->assertEquals(true, $isInstanceOfValueObject);
    }
}
