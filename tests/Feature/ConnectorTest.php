<?php

declare(strict_types=1);

it('checks that a connector is a saloon connector', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonConnector\ToBeSaloonConnector')
        ->toBeSaloonConnector();
});
