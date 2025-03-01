<?php

declare(strict_types=1);

use Pest\Expectation;

expect()->extend(
    'toSetConnectTimeout',
    fn (int $connectTimeout = 10): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'connectTimeout'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
        ->getProperty('connectTimeout')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toEqual($connectTimeout)
);

expect()->extend(
    'toSetRequestTimeout',
    fn (int $requestTimeout = 30): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'requestTimeout'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
        ->getProperty('requestTimeout')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toEqual($requestTimeout)
);

expect()->extend(
    'toBeTriedAgainOnFailure',
    fn (int $tries = 3): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'tries'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getProperty('tries')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toEqual($tries)
);

expect()->extend(
    'toHaveRetryInterval',
    fn (int $retryInterval = 500): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'retryInterval'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getProperty('retryInterval')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toEqual($retryInterval)
);

expect()->extend(
    'toUseExponentialBackoff',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'useExponentialBackoff'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getProperty('useExponentialBackoff')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toBeTrue()
);

expect()->extend(
    'toThrowOnMaxTries',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'throwOnMaxTries'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getProperty('throwOnMaxTries')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toBeTrue()
);
