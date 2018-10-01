<?php

namespace app\infrastructure\persistence\inMemory\defaultEntityRepository;


use app\nameOfBoundedContext\domainModel\defaultConcept\DefaultEntity;

interface DefaultEntityRepository
{
    public function add(DefaultEntity $defaultEntity): void;
    public function size(): int;
}