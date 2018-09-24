<?php

namespace app\entities\defaultEntity;


class DefaultEntityFactory
{
    static public function build(): DefaultEntity
    {
        return new DefaultEntity();
    }
}