<?php

declare(strict_types=1);

namespace Potter\Clock;

use \Psr\Clock\ClockInterface as PsrClockInterface, \DateTimeImmutable;

interface ClockInterface extends PsrClockInterface
{
    public function now(): DateTimeImmutable;
}