<?php

declare(strict_types=1);

use Pest\Arch\SingleArchExpectation;
use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Traits\HasCaching;

expect()->extend(
    'toHaveCaching',
    fn (): SingleArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(HasCaching::class)
        ->toImplement(Cacheable::class)
);
