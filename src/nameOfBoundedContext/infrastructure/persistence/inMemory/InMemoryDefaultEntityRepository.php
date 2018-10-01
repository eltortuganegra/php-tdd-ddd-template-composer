<?php

namespace app\infrastructure\persistence\inMemory;


use app\infrastructure\persistence\inMemory\defaultEntityRepository\DefaultEntityRepository;
use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultEntity;


class InMemoryDefaultEntityRepository implements DefaultEntityRepository
{
    private $defaultEntities;

    public function __construct()
    {
        $this->createCollection();
    }

    private function createCollection(): void
    {
        $this->defaultEntities = [];
    }

    public function add(DefaultEntity $defaultEntity): void
    {
        $this->defaultEntities[] = $defaultEntity;
    }

    public function size(): int
    {
        return count($this->defaultEntities);
    }


}