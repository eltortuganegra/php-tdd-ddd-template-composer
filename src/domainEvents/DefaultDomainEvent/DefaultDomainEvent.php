<?php

namespace app\domainEvents\defaultDomainEvent;


use app\domainEvents\DomainEvent;
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