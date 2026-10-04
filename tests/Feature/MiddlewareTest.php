<?php

declare(strict_types=1);

use Tests\Fixtures\Arch\ToBeRequestMiddleware\ToBeRequestMiddleware;
use Tests\Fixtures\Arch\ToBeResponseMiddleware\ToBeResponseMiddleware;

it('checks that a class is request middleware', function (): void {
    expect(ToBeRequestMiddleware::class)
        ->toBeRequestMiddleware();
});

it('checks that a class is response middleware', function (): void {
    expect(ToBeResponseMiddleware::class)
        ->toBeResponseMiddleware();
});
