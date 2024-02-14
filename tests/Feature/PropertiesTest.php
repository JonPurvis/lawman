<?php

declare(strict_types=1);

it('checks that a class sets a connect timeout', function () {
    expect('Tests\Fixtures\Arch\ToSetConnectTimeout\ToSetConnectTimeout')
        ->toSetConnectTimeout();
});

it('checks that a class sets a request timeout', function () {
    expect('Tests\Fixtures\Arch\ToSetRequestTimeout\ToSetRequestTimeout')
        ->toSetRequestTimeout();
});

it('checks that a class is tried again on failure', function () {
    expect('Tests\Fixtures\Arch\ToBeTriedAgainOnFailure\ToBeTriedAgainOnFailure')
        ->toBeTriedAgainOnFailure();
});

it('checks that a class has a retry interval', function () {
    expect('Tests\Fixtures\Arch\ToHaveRetryInterval\ToHaveRetryInterval')
        ->toHaveRetryInterval();
});

it('checks that a class uses exponential backoff', function () {
    expect('Tests\Fixtures\Arch\ToUseExponentialBackoff\ToUseExponentialBackoff')
        ->toUseExponentialBackoff();
});

it('checks that a class throws on max tries', function () {
    expect('Tests\Fixtures\Arch\ToThrowOnMaxTries\ToThrowOnMaxTries')
        ->toThrowOnMaxTries();
});
