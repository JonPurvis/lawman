<?php

declare(strict_types=1);

it('saloon plugin', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonPlugin\ToBeSaloonPlugin')
        ->toBeSaloonPlugin();
});
