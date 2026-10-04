<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToHaveRateLimits\ToHaveRateLimits;

it('checks that a class has rate limits', function (): void {
    expect(ToHaveRateLimits::class)
        ->toHaveRateLimits();
});
