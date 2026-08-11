<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Traits\HasCaching;

expect()->extend(
    'toHaveCaching',
    fn (): ArchExpectation => $this->toUse(HasCaching::class)
        ->toImplement(Cacheable::class)
);
