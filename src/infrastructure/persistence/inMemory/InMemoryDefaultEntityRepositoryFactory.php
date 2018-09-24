<?php

namespace app\infrastructure\persistence\inMemory;


use app\infrastructure\persistence\inMemory\defaultEntityRepository\DefaultEntityRepository;

class InMemoryDefaultEntityRepositoryFactory
{
    public function build(): DefaultEntityRepository
    {
        return new InMemoryDefaultEntityRepository();
    }
}