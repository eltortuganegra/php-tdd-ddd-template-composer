<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


class DefaultValueObjectFactory
{
    static public function build(): DefaultValueObject
    {
        return new DefaultValueObject();
    }
}