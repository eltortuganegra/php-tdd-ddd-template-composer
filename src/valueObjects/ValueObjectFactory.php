<?php

namespace app\valueObjects;


class ValueObjectFactory
{
    static public function build(): ValueObject
    {
        return new ValueObject();
    }
}