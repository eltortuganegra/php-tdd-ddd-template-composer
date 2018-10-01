<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


class DefaultEntityFactory
{
    static public function build(): DefaultEntity
    {
        return new DefaultEntity();
    }
}