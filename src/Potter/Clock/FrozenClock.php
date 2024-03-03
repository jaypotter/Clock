<?php

declare(strict_types=1);

namespace Potter\Clock;

use \DateTimeImmutable;

final class FrozenClock extends AbstractClock
{
    private DateTimeImmutable $now;

    public function __construct(?DateTimeImmutable $now = null)
    {
        $this->now = $now ?? new DateTimeImmutable;
    }

    public function now(): DateTimeImmutable
    {
        return clone $this->now;
    }
}