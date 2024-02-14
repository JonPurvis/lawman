<?php

declare(strict_types=1);

use Pest\Arch\SingleArchExpectation;

expect()->extend(
    'toHaveCaching',
    fn (): SingleArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\CachePlugin\Traits\HasCaching')
        ->toImplement('Saloon\CachePlugin\Contracts\Cacheable')
);
