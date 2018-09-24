<?php


use app\entities\defaultEntity\DefaultEntity;
use app\entities\defaultEntity\DefaultEntityFactory;
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
