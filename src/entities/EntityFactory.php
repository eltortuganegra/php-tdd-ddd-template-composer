<?php

namespace app\entities;


class EntityFactory
{
    static public function build(): Entity
    {
        return new Entity();
    }
}