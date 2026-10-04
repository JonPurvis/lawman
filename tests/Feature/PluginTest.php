<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToBeSaloonPlugin\ToBeSaloonPlugin;

it('saloon plugin', function (): void {
    expect(ToBeSaloonPlugin::class)
        ->toBeSaloonPlugin();
});
