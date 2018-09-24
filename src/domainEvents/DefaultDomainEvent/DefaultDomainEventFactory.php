<?php

namespace app\domainEvents\defaultDomainEvent;


use app\domainEvents\DomainEvent;
use DateTime;

class DefaultDomainEventFactory
{
    public function build(): DomainEvent
    {
        return new DefaultDomainEvent(new DateTime());
    }
}