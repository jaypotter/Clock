<?php

declare(strict_types=1);

namespace Potter\Clock;

use \DateTimeImmutable;

abstract class AbstractClock implements ClockInterface
{
    abstract public function now(): DateTimeImmutable;
}