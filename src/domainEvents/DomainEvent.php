<?php

namespace app\domainEvents;


use DateTime;

interface DomainEvent
{
    public function occurredOn(): DateTime;
}