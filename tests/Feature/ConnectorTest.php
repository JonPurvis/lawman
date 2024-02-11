<?php

declare(strict_types=1);

it('checks that a class is a saloon connector', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonConnector\IsConnector')
        ->toBeSaloonConnector();
});

it('checks that a class is not a saloon connector', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonConnector\IsNotConnector')
        ->not->toBeSaloonConnector();
});
