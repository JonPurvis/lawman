<?php

declare(strict_types=1);

it('checks that a connector is a saloon connector', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonConnector\ToBeSaloonConnector')
        ->toBeSaloonConnector();
});

it('checks that a connector sets some default headers', function () {
    expect('Tests\Fixtures\Arch\ToHaveDefaultHeaders\ToBeHaveDefaultHeaders')
        ->toHaveDefaultHeaders();
});

it('checks that a connector has a default config', function () {
    expect('Tests\Fixtures\Arch\ToHaveDefaultConfig\ToBeHaveDefaultConfig')
        ->toHaveDefaultConfig();
});

it('checks that a connector has a base url', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonConnector\ToBeSaloonConnector')
        ->toHaveBaseUrl();
});

it('checks that a connector has a custom response', function () {
    expect('Tests\Fixtures\Arch\ToUseCustomResponse\ToUseCustomResponse')
        ->toUseCustomResponse();
});

it('checks that a connector has custom failure detection', function () {
    expect('Tests\Fixtures\Arch\ToHaveCustomFailureDetection\ToHaveCustomFailureDetection')
        ->toHaveCustomFailureDetection();
});

it('checks that a connector has a custom exception', function () {
    expect('Tests\Fixtures\Arch\ToHaveCustomException\ToHaveCustomException')
        ->toHaveCustomException();
});
