<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToBeTriedAgainOnFailure\ToBeTriedAgainOnFailure;
use Tests\Fixtures\Arch\ToHaveRetryInterval\ToHaveRetryInterval;
use Tests\Fixtures\Arch\ToSetConnectTimeout\ToSetConnectTimeout;
use Tests\Fixtures\Arch\ToSetRequestTimeout\ToSetRequestTimeout;
use Tests\Fixtures\Arch\ToThrowOnMaxTries\ToThrowOnMaxTries;
use Tests\Fixtures\Arch\ToUseExponentialBackoff\ToUseExponentialBackoff;

it('checks that a class sets a connect timeout', function (): void {
    expect(ToSetConnectTimeout::class)
        ->toSetConnectTimeout(connectTimeout: 60);
});

it('checks that a class sets a request timeout', function (): void {
    expect(ToSetRequestTimeout::class)
        ->toSetRequestTimeout(requestTimeout: 120);
});

it('checks that a class is tried again on failure', function (): void {
    expect(ToBeTriedAgainOnFailure::class)
        ->toBeTriedAgainOnFailure(tries: 2);
});

it('checks that a class has a retry interval', function (): void {
    expect(ToHaveRetryInterval::class)
        ->toHaveRetryInterval(retryInterval: 500);
});

it('checks that a class uses exponential backoff', function (): void {
    expect(ToUseExponentialBackoff::class)
        ->toUseExponentialBackoff();
});

it('checks that a class throws on max tries', function (): void {
    expect(ToThrowOnMaxTries::class)
        ->toThrowOnMaxTries();
});
