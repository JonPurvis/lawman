<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toHaveRateLimits',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\RateLimitPlugin\Traits\HasRateLimits')
);
