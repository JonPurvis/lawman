<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToBeSaloonDto\ToBeSaloonDto;
use Tests\Fixtures\Arch\ToBeSaloonResponse\ToBeSaloonResponse;

it('checks that a class is a saloon response', function (): void {
    expect(ToBeSaloonResponse::class)
        ->toBeSaloonResponse();
});

it('checks that a class is a saloon dto', function (): void {
    expect(ToBeSaloonDto::class)
        ->toBeSaloonDto();
});
