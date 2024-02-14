<?php

declare(strict_types=1);

it('checks that a class has rate limits', function () {
    expect('Tests\Fixtures\Arch\ToHaveRateLimits\ToHaveRateLimits')
        ->toHaveRateLimits();
});
