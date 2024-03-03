<?php

declare(strict_types=1);

namespace Potter\Clock;

use \DateTimeImmutable;

final class SystemClock extends AbstractClock
{
    public function now(): DateTimeImmutable
    {
        return self::_now();
    }
    
    public static function _now(): DateTimeImmutable
    {
        return new DateTimeImmutable;
    }
}