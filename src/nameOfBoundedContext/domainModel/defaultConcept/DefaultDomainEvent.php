<?php

namespace app\nameOfBoundedContext\domainModel\defaultConcept;



use app\nameOfBoundedContext\domainModel\DomainEvent;
use DateTime;

class DefaultDomainEvent implements DomainEvent
{
    private $occurredOn;

    public function __construct(DateTime $occurredOn)
    {
        $this->occurredOn = $occurredOn;
    }

    public function occurredOn(): DateTime
    {
        return $this->occurredOn;
    }
}