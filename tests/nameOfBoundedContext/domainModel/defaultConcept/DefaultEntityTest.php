<?php


use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultEntity;
use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultEntityFactory;
use PHPUnit\Framework\TestCase;

class DefaultEntityTest extends TestCase
{
    public function testItShouldCreateInstanceOfEntityWhenWeCreateAnInstanceWithFactory()
    {
        // Arrange
        $entity = DefaultEntityFactory::build();

        // Act
        $isInstanceOfEntity = $entity instanceof DefaultEntity;

        // Assert
        $this->assertEquals(true, $isInstanceOfEntity);
    }

}
