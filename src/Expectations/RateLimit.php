<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\RateLimitPlugin\Traits\HasRateLimits;

expect()->extend(
    'toHaveRateLimits',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(HasRateLimits::class)
);
