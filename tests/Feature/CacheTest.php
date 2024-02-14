<?php

declare(strict_types=1);

it('checks that a class is cacheable', function () {
    expect('Tests\Fixtures\Arch\ToHaveCaching\ToHaveCaching')
        ->toHaveCaching();
});
