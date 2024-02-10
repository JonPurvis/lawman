<?php

use function Pest\PluginName\example;

it('may be accessed on the `$this` closure', function () {
    $this->example('foo');
});

it('may be accessed as function', function () {
    example('foo');
});

it('test', function () {
    expect('Pest\PluginName\App\Http\Integrations\Stripe\AnotherTestConnector')
        ->not->toBeSaloonConnector();
});
