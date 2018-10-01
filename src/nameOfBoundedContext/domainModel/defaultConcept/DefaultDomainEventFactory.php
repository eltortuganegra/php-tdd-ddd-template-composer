<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;


use app\nameOfBoundedContext\domainModel\DomainEvent;
use DateTime;

class DefaultDomainEventFactory
{
    public function build(): DomainEvent
    {
        return new DefaultDomainEvent(new DateTime());
    }
}