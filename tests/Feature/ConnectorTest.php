<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToBeSaloonConnector\ToBeSaloonConnector;
use Tests\Fixtures\Arch\ToBeSaloonResource\ToBeSaloonResource;
use Tests\Fixtures\Arch\ToHandlePsrRequest\ToHandlePsrRequest;
use Tests\Fixtures\Arch\ToHaveBootMethod\ToHaveBootMethod;
use Tests\Fixtures\Arch\ToHaveCustomException\ToHaveCustomException;
use Tests\Fixtures\Arch\ToHaveCustomFailureDetection\ToHaveCustomFailureDetection;
use Tests\Fixtures\Arch\ToHaveDefaultOauthConfig\ToHaveDefaultOauthConfig;
use Tests\Fixtures\Arch\ToHaveDefaultSender\ToHaveDefaultSender;
use Tests\Fixtures\Arch\ToUseCustomResponse\ToUseCustomResponse;
use Tests\Fixtures\Arch\ToUseTokenAuthentication\ToUseTokenAuthentication;

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

it('checks that a connector has default authentication', function (): void {
    expect(ToUseTokenAuthentication::class)
        ->toHaveDefaultAuth();
});

it('checks that a connector has a default oauth config', function (): void {
    expect(ToHaveDefaultOauthConfig::class)
        ->toHaveDefaultOauthConfig();
});

it('checks that a class is a saloon resource', function (): void {
    expect(ToBeSaloonResource::class)
        ->toBeSaloonResource();
});

it('checks that a class has a boot method', function (): void {
    expect(ToHaveBootMethod::class)
        ->toHaveBootMethod();
});

it('checks that a class handles the psr request', function (): void {
    expect(ToHandlePsrRequest::class)
        ->toHandlePsrRequest();
});

it('checks that a class has a default sender', function (): void {
    expect(ToHaveDefaultSender::class)
        ->toHaveDefaultSender();
});
