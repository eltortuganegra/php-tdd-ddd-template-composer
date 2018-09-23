<?php

use app\entities\Entity;
use app\entities\EntityFactory;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    public function testItShouldCreateInstanceOfEntityWhenWeCreateAnInstaceWithFactory()
    {
        // Arrange
        $entity = EntityFactory::build();

        // Act
        $isInstanceOfEntity = $entity instanceof Entity;

        // Assert
        $this->assertEquals(true, $isInstanceOfEntity);
    }

}
