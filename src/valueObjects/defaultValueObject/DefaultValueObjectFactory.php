<?php

namespace app\valueObjects\defaultValueObject;


class DefaultValueObjectFactory
{
    static public function build(): DefaultValueObject
    {
        return new DefaultValueObject();
    }
}