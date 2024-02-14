<?php

declare(strict_types=1);

it('checks that a class is a saloon response', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonResponse\ToBeSaloonResponse')
        ->toBeSaloonResponse();
});
