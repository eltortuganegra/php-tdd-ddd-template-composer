<?php

namespace app\nameOfBoundedContext\domainModel;


use DateTime;

interface DomainEvent
{
    public function occurredOn(): DateTime;
}