<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToHaveCaching\ToHaveCaching;

it('checks that a class is cacheable', function (): void {
    expect(ToHaveCaching::class)
        ->toHaveCaching();
});
