<?php

use app\infrastructure\persistence\inMemory\InMemoryDefaultEntityRepositoryFactory;
use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultEntityFactory;
use PHPUnit\Framework\TestCase;

class InMemoryDefaultEntityRepositoryTest extends TestCase
{
    public function testRepositoryShouldHasOneElementWhenWeAddOneDefaultEntity(): void
    {
        // Arrange
        $defaultEntityRepository = InMemoryDefaultEntityRepositoryFactory::build();
        $defaultEntity = DefaultEntityFactory::build();
        $defaultEntityRepository->add($defaultEntity);

        // Act
        $sizeCollection = $defaultEntityRepository->size();

        // Assert
        $this->assertEquals(1, $sizeCollection);
    }

}
