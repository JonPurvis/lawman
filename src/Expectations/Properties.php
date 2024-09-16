<?php

declare(strict_types=1);

use Pest\Expectation;

expect()->extend(
    'toSetConnectTimeout',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'connectTimeout'))->toBeTrue()
);

expect()->extend(
    'toSetRequestTimeout',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'requestTimeout'))->toBeTrue()
);

expect()->extend(
    'toBeTriedAgainOnFailure',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'tries'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getProperty('tries')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toBeGreaterThan(1)
);

expect()->extend(
    'toHaveRetryInterval',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'retryInterval'))->toBeTrue()
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getProperty('retryInterval')
            ->getValue((new ReflectionClass($this->value))->newInstanceWithoutConstructor())) // @phpstan-ignore-line
        ->toBeGreaterThan(0)
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
