<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToBeSaloonConnector\ToBeSaloonConnector;
use Tests\Fixtures\Arch\ToHaveCustomException\ToHaveCustomException;
use Tests\Fixtures\Arch\ToHaveCustomFailureDetection\ToHaveCustomFailureDetection;
use Tests\Fixtures\Arch\ToUseCustomResponse\ToUseCustomResponse;

it('checks that a connector is a saloon connector', function (): void {
    expect(ToBeSaloonConnector::class)
        ->toBeSaloonConnector();
});

it('checks that a connector sets some default headers', function (): void {
    expect('Tests\Fixtures\Arch\ToHaveDefaultHeaders\ToBeHaveDefaultHeaders')
        ->toHaveDefaultHeaders();
});

it('checks that a connector has a default config', function (): void {
    expect('Tests\Fixtures\Arch\ToHaveDefaultConfig\ToBeHaveDefaultConfig')
        ->toHaveDefaultConfig();
});

it('checks that a connector has a base url', function (): void {
    expect(ToBeSaloonConnector::class)
        ->toHaveBaseUrl();
});

it('checks that a connector has a custom response', function (): void {
    expect(ToUseCustomResponse::class)
        ->toUseCustomResponse();
});

it('checks that a connector has custom failure detection', function (): void {
    expect(ToHaveCustomFailureDetection::class)
        ->toHaveCustomFailureDetection();
});

it('checks that a connector has a custom exception', function (): void {
    expect(ToHaveCustomException::class)
        ->toHaveCustomException();
});
